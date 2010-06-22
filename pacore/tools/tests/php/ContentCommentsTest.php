<?php
/** !
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* [filename] is a part of PeopleAggregator.
* [description including history]
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* @author [creator, or "Original Author"]
* @license http://bit.ly/aVWqRV PayAsYouGo License
* @copyright Copyright (c) 2010 Broadband Mechanics
* @package PeopleAggregator
*/
?>
<?php

require_once dirname(__FILE__)."/lib/common.php";

class ContentCommentsTest extends PHPUnit_Framework_TestCase {

    function testAddDeleteContentComments() {
        //    Dal::register_query_callback("explain_query");
        echo "getting a user\n";
        $user = Test::get_test_user();
        echo "test user = $user->first_name $user->last_name\n";
        echo "adding some content\n";
        $post                       = new BlogPost();
        $post->author_id            = $user->user_id;
        $post->parent_collection_id =-1;
        $post->title                = "Test blog post (from testAddDeleteContentComments)";
        $post->body                 = "<p>This is the post body!</p><p>Foo <b>foo</b> foo</p>";
        $post->allow_comments       = 1;
        $post->is_active            = 1;
        $post->display_on           = DISPLAY_ON_HOMEPAGE;
        $post->save();
        echo "... saved as content_id=$post->content_id\n";
        echo "testing that it is retrievable\n";
        $post_retr = Content::load_content($post->content_id, $user->user_id);
        $this->assertEquals($post_retr->content_id, $post->content_id);
        $this->assertEquals($post_retr->title, $post->title);
        $this->assertEquals($post_retr->body, $post->body);
        $this->assertEquals($post_retr->author_id, $user->user_id);
        $this->assertEquals($post_retr->is_active, 1);
        echo "posting a comment\n";
        $cmt             = new Comment();
        $cmt->content_id = $post->content_id;
        $cmt_comment     = "This is an automatic comment - on an autogenerated post";
        $cmt->comment    = $cmt_comment;
        $cmt->user_id    = $user->user_id;
        $cmt->name       = $cmt->email = $cmt->homepage = '';
        $cmt->ip_addr    = '127.0.0.1';
        $cmt->referrer   = 'http://example.com/';
        $cmt->user_agent = 'phpunit auto-test';
        $cmt->save();
        echo "... saved as comment_id=$cmt->comment_id\n";
        echo "testing that the comment is retrievable\n";
        $cmt_retr = new Comment();
        $cmt_retr->load($cmt->comment_id);
        $this->assertEquals($cmt_retr->comment_id, $cmt->comment_id);
        $this->assertEquals($cmt_retr->content_id, $post->content_id);
        $this->assertEquals($cmt_retr->comment, $cmt_comment);
        $this->assertEquals($cmt_retr->is_active, 1);
        echo "testing that we see one comment on the post\n";
        $comments = Comment::get_comment_for_content($post->content_id);
        echo count($comments)." comments\n";
        //var_dump($comments);
        $this->assertEquals(count($comments), 1);
        echo "testing that we have no trackbacks on the post\n";
        $trackbacks = Content::get_trackbacks_for_content($post->content_id);
        echo count($trackbacks)." trackbacks\n";
        //var_dump($trackbacks);
        $this->assertEquals(count($trackbacks), 0);
        echo "posting ANOTHER comment\n";
        $cmt2             = new Comment();
        $cmt2->content_id = $post->content_id;
        $cmt2_comment     = "This is ANOTHER automatic comment - on the same autogenerated post";
        $cmt2->comment    = $cmt_comment;
        $cmt2->user_id    = $user->user_id;
        $cmt2->name       = $cmt2->email = $cmt2->homepage = '';
        $cmt2->ip_addr    = '127.0.0.1';
        $cmt2->referrer   = 'http://example.com/';
        $cmt2->user_agent = 'phpunit auto-test';
        $cmt2->save();
        echo "... saved as comment_id=$cmt2->comment_id\n";
        echo "testing that we see two comments on the post\n";
        $comments = Comment::get_comment_for_content($post->content_id);
        $this->assertEquals(count($comments), 2);
        echo "deleting the first comment\n";
        $cmt_retr->delete();
        echo "testing that we see one comment on the post again (not seeing the deleted one)\n";
        $comments = Comment::get_comment_for_content($post->content_id);
        $this->assertEquals(count($comments), 1);
        echo "testing that the first comment (now deleted) is not retrievable\n";
        $cmt_retr_fail = new Comment();
        try {
            $cmt_retr_fail->load($cmt->comment_id);
            $this->assertTrue(FALSE);
            // shouldn't get here
        }
        catch(PAException$e) {
            $this->assertEquals($e->getCode(), COMMENT_NOT_EXIST);
        }
        echo "deleting the post\n";
        Content::delete_by_id($post->content_id);
        echo "testing that the post is not retrievable\n";
        try {
            $post_retr_fail = Content::load_content($post->content_id, $user->user_id);
            $this->assertTrue(FALSE);
            // shouldn't get here
        }
        catch(PAException$e) {
            $this->assertEquals($e->getCode(), CONTENT_NOT_FOUND);
        }
        echo "testing that the last comment is not retrievable\n";
        $cmt_retr_fail = new Comment();
        try {
            $cmt_retr_fail->load($cmt->comment_id);
            $this->assertTrue(FALSE);
            // shouldn't get here
        }
        catch(PAException$e) {
            $this->assertEquals($e->getCode(), COMMENT_NOT_EXIST);
        }
        //    summarize_timed_queries();
    }
}
?>