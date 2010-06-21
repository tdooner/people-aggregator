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

$api_desc = array(
    'name' => 'APIs built at Wed Apr 28 19:02:48 2010: Example Project API, PeopleAggregator API',
    'methods' => array(
        'peopleaggregator.getMessages' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'messages' => array(
                        'item' => array(
                            'content' => array(
                                'content' => array(
                                    'default' => '',
                                    'type' => 'string',
                                ),
                                'title' => array(
                                    'type' => 'string',
                                ),
                                'id' => array(
                                    'type' => 'string',
                                ),
                                'recipients' => array(
                                    'item' => array(
                                        'content' => array(
                                            'login' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                        'type' => 'hash',
                                        'allow_extra_keys' => 0,
                                    ),
                                    'type' => 'array',
                                ),
                                'sender' => array(
                                    'content' => array(
                                        'id' => array(
                                            'type' => 'string',
                                        ),
                                    ),
                                    'type' => 'hash',
                                    'allow_extra_keys' => 0,
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'detailLevel' => array(
                    'default' => 'all',
                    'values' => array(
                        'all',
                        'summary',
                    ),
                    'type' => 'enum',
                ),
                'folder' => array(
                    'type' => 'string',
                ),
                'resultsPerPage' => array(
                    'default' => 10,
                    'max'     => 100,
                    'type'    => 'int',
                    'min'     => 10,
                ),
                'page' => array(
                    'default' => 1,
                    'type'    => 'int',
                    'min'     => 1,
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.getContent' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'totalPages' => array(
                        'type' => 'int',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                    'items' => array(
                        'item' => array(
                            'content' => array(
                                'url' => array(
                                    'type' => 'string',
                                ),
                                'content' => array(
                                    'default' => '',
                                    'type' => 'string',
                                ),
                                'id' => array(
                                    'type' => 'string',
                                ),
                                'title' => array(
                                    'type' => 'string',
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                    'detailLevel' => array(
                        'default' => 'all',
                        'values' => array(
                            'all',
                            'content',
                            'summary',
                        ),
                        'type' => 'enum',
                    ),
                    'resultsPerPage' => array(
                        'type' => 'int',
                    ),
                    'msg' => array(
                        'type' => 'string',
                    ),
                    'totalResults' => array(
                        'type' => 'int',
                    ),
                    'page' => array(
                        'type' => 'int',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'detailLevel' => array(
                    'default' => 'all',
                    'values' => array(
                        'all',
                        'content',
                        'summary',
                    ),
                    'type' => 'enum',
                ),
                'resultsPerPage' => array(
                    'default' => 10,
                    'max'     => 100,
                    'type'    => 'int',
                    'min'     => 10,
                ),
                'page' => array(
                    'default' => 1,
                    'type'    => 'int',
                    'min'     => 1,
                ),
                'context' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'blogger.getUserInfo' => array(
            'argstyle' => 'positional',
            'return' => array(
                'content' => array(
                    'firstname' => array(
                        'type' => 'string',
                    ),
                    'url' => array(
                        'type' => 'string',
                    ),
                    'lastname' => array(
                        'type' => 'string',
                    ),
                    'userid' => array(
                        'type' => 'string',
                    ),
                    'nickname' => array(
                        'type' => 'string',
                    ),
                    'email' => array(
                        'type' => 'string',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'appkey' => array(
                    'type' => 'string',
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'password' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
            'argorder' => array(
                'appkey',
                'login',
                'password',
            ),
        ),
        'peopleaggregator.newGroup' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'id' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'category' => array(
                    'type' => 'string',
                ),
                'registrationType' => array(
                    'values' => array(
                        'open',
                        'moderated',
                        'invite',
                    ),
                    'type' => 'enum',
                ),
                'description' => array(
                    'type' => 'string',
                ),
                'tags' => array(
                    'type' => 'string',
                ),
                'image' => array(
                    'type' => 'string',
                ),
                'accessType' => array(
                    'values' => array(
                        'public',
                        'members',
                    ),
                    'type' => 'enum',
                ),
                'moderationType' => array(
                    'values' => array(
                        'direct',
                        'moderated',
                    ),
                    'type' => 'enum',
                ),
                'name' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
        'peopleaggregator.findGroup' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'groups' => array(
                        'item' => array(
                            'content' => array(
                                'id' => array(
                                    'type' => 'string',
                                ),
                                'name' => array(
                                    'type' => 'string',
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'name' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
        'peopleaggregator.echo' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'echoText' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'echoText' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.getUserList' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'users' => array(
                        'item' => array(
                            'content' => array(
                                'login' => array(
                                    'type' => 'string',
                                ),
                                'id' => array(
                                    'type' => 'string',
                                ),
                                'image' => array(
                                    'content' => array(
                                        'url' => array(
                                            'type' => 'string',
                                        ),
                                        'width' => array(
                                            'type' => 'int',
                                        ),
                                        'height' => array(
                                            'type' => 'int',
                                        ),
                                    ),
                                    'optional'         => TRUE,
                                    'type'             => 'hash',
                                    'allow_extra_keys' => 0,
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                    'resultsPerPage' => array(
                        'type' => 'int',
                    ),
                    'totalPages' => array(
                        'type' => 'int',
                    ),
                    'totalUsers' => array(
                        'type' => 'int',
                    ),
                    'page' => array(
                        'type' => 'int',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'profileImageSize' => array(
                    'default' => 'none',
                    'values' => array(
                        'none',
                        '50x50',
                        '127x135',
                        'full',
                    ),
                    'type' => 'enum',
                ),
                'resultsPerPage' => array(
                    'default' => 100,
                    'max'     => 100,
                    'type'    => 'int',
                    'min'     => 10,
                ),
                'page' => array(
                    'default' => 1,
                    'type'    => 'int',
                    'min'     => 1,
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.newPersona' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'persona_id' => array(
                        'type' => 'int',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'persona_service_id' => array(
                    'type' => 'int',
                ),
                'configuration' => array(
                    'type' => 'string',
                ),
                'name' => array(
                    'type' => 'string',
                ),
                'sequence' => array(
                    'type' => 'int',
                ),
            ),
            'type' => 'post',
        ),
        'peopleaggregator.exceptionTest' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(),
            'type' => 'get',
        ),
        'peopleaggregator.getGroups' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'success' => array(
                        'type' => 'boolean',
                    ),
                    'totalPages' => array(
                        'type' => 'int',
                    ),
                    'resultsPerPage' => array(
                        'default' => 100,
                        'type' => 'int',
                    ),
                    'groups' => array(
                        'item' => array(
                            'content' => array(
                                'memberCount' => array(
                                    'type' => 'int',
                                ),
                                'url' => array(
                                    'type' => 'string',
                                ),
                                'id' => array(
                                    'type' => 'string',
                                ),
                                'name' => array(
                                    'type' => 'string',
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                    'msg' => array(
                        'type' => 'string',
                    ),
                    'totalResults' => array(
                        'type' => 'int',
                    ),
                    'page' => array(
                        'type' => 'int',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'resultsPerPage' => array(
                    'default' => 100,
                    'max'     => 100,
                    'type'    => 'int',
                    'min'     => 10,
                ),
                'page' => array(
                    'default' => 1,
                    'type'    => 'int',
                    'min'     => 1,
                ),
                'context' => array(
                    'default' => 'global',
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'metaWeblog.editPost' => array(
            'argstyle' => 'positional',
            'return' => array(
                'type' => 'boolean',
            ),
            'args' => array(
                'password' => array(
                    'type' => 'string',
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'postid' => array(
                    'type' => 'string',
                ),
                'post' => array(
                    'content' => array(
                        'link' => array(
                            'default' => '',
                            'type' => 'string',
                        ),
                        'description' => array(
                            'type' => 'string',
                        ),
                        'title' => array(
                            'default' => '',
                            'type' => 'string',
                        ),
                    ),
                    'type' => 'hash',
                    'allow_extra_keys' => 1,
                ),
                'publish' => array(
                    'type' => 'boolean',
                ),
            ),
            'type' => 'post',
            'argorder' => array(
                'postid',
                'login',
                'password',
                'post',
                'publish',
            ),
        ),
        'peopleaggregator.getPersonas' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'success' => array(
                        'type' => 'boolean',
                    ),
                    'personas' => array(
                        'item' => array(
                            'content' => array(
                                'user_id' => array(
                                    'type' => 'int',
                                ),
                                'name' => array(
                                    'type' => 'string',
                                ),
                                'sequence' => array(
                                    'type' => 'int',
                                ),
                                'persona_service_id' => array(
                                    'type' => 'int',
                                ),
                                'configuration' => array(
                                    'type' => 'string',
                                ),
                                'persona_id' => array(
                                    'type' => 'int',
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.getUserProfile' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'profile' => array(
                        'content' => array(
                            'general' => array(
                                'content' => array(
                                    'dob' => array(
                                        'optional' => TRUE,
                                        'type' => 'date',
                                    ),
                                ),
                                'type' => 'hash',
                                'allow_extra_keys' => 1,
                            ),
                        ),
                        'type' => 'hash',
                        'allow_extra_keys' => 1,
                    ),
                    'name' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                    'url' => array(
                        'type' => 'string',
                    ),
                    'login' => array(
                        'type' => 'string',
                    ),
                    'id' => array(
                        'type' => 'string',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'login' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.newUser' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'msg' => array(
                        'type' => 'string',
                    ),
                    'id' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'firstName' => array(
                    'type' => 'string',
                ),
                'adminPassword' => array(
                    'type' => 'string',
                ),
                'lastName' => array(
                    'type' => 'string',
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'password' => array(
                    'type' => 'string',
                ),
                'email' => array(
                    'type' => 'string',
                ),
                'homeNetwork' => array(
                    'default' => 'default',
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
        'peopleaggregator.echoPost' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'echoText' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'echoText' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
        'metaWeblog.newPost' => array(
            'argstyle' => 'positional',
            'return' => array(
                'type' => 'string',
            ),
            'args' => array(
                'post' => array(
                    'content' => array(
                        'link' => array(
                            'default' => '',
                            'type' => 'string',
                        ),
                        'description' => array(
                            'type' => 'string',
                        ),
                        'title' => array(
                            'default' => '',
                            'type' => 'string',
                        ),
                    ),
                    'type' => 'hash',
                    'allow_extra_keys' => 1,
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'password' => array(
                    'type' => 'string',
                ),
                'blogid' => array(
                    'type' => 'string',
                ),
                'publish' => array(
                    'type' => 'boolean',
                ),
            ),
            'type' => 'post',
            'argorder' => array(
                'blogid',
                'login',
                'password',
                'post',
                'publish',
            ),
        ),
        'peopleaggregator.getUserRelations' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'success' => array(
                        'type' => 'boolean',
                    ),
                    'relations' => array(
                        'item' => array(
                            'content' => array(
                                'url' => array(
                                    'type' => 'string',
                                ),
                                'login' => array(
                                    'type' => 'string',
                                ),
                                'relation' => array(
                                    'values' => array(
                                        'havent met',
                                        'acquaintance',
                                        'relation',
                                        'good relation',
                                        'best relation',
                                    ),
                                    'type' => 'enum',
                                ),
                                'id' => array(
                                    'type' => 'string',
                                ),
                                'image' => array(
                                    'content' => array(
                                        'url' => array(
                                            'type' => 'string',
                                        ),
                                        'width' => array(
                                            'type' => 'int',
                                        ),
                                        'height' => array(
                                            'type' => 'int',
                                        ),
                                    ),
                                    'optional'         => TRUE,
                                    'type'             => 'hash',
                                    'allow_extra_keys' => 0,
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                    'totalPages' => array(
                        'type' => 'int',
                    ),
                    'resultsPerPage' => array(
                        'default' => 100,
                        'type' => 'int',
                    ),
                    'msg' => array(
                        'type' => 'string',
                    ),
                    'login' => array(
                        'type' => 'string',
                    ),
                    'totalResults' => array(
                        'type' => 'int',
                    ),
                    'page' => array(
                        'type' => 'int',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'profileImageSize' => array(
                    'default' => 'full',
                    'values' => array(
                        '50x50',
                        '127x135',
                        'full',
                    ),
                    'type' => 'enum',
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'resultsPerPage' => array(
                    'default' => 100,
                    'max'     => 100,
                    'type'    => 'int',
                    'min'     => 10,
                ),
                'page' => array(
                    'default' => 1,
                    'type'    => 'int',
                    'min'     => 1,
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.joinGroup' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'joinState' => array(
                        'values' => array(
                            'joined',
                            'in_moderation',
                        ),
                        'type' => 'enum',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'id' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
        'peopleaggregator.deleteGroup' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'id' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
        'peopleaggregator.listAds' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'msg' => array(
                        'type' => 'string',
                    ),
                    'ads' => array(
                        'item' => array(
                            'content' => array(
                                'description' => array(
                                    'type' => 'string',
                                ),
                                'title' => array(
                                    'type' => 'string',
                                ),
                                'url' => array(
                                    'optional' => TRUE,
                                    'type' => 'string',
                                ),
                                'image' => array(
                                    'content' => array(
                                        'url' => array(
                                            'type' => 'string',
                                        ),
                                        'width' => array(
                                            'type' => 'int',
                                        ),
                                        'height' => array(
                                            'type' => 'int',
                                        ),
                                    ),
                                    'optional'         => TRUE,
                                    'type'             => 'hash',
                                    'allow_extra_keys' => 0,
                                ),
                                'javascript' => array(
                                    'optional' => TRUE,
                                    'type' => 'string',
                                ),
                                'id' => array(
                                    'type' => 'string',
                                ),
                                'orientation' => array(
                                    'type' => 'string',
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'page_type' => array(
                    'default' => 'homepage',
                    'values' => array(
                        'homepage',
                        'user_public',
                        'group',
                    ),
                    'type' => 'enum',
                ),
            ),
            'type' => 'get',
        ),
        'metaWeblog.getUserInfo' => array(
            'alias' => 'blogger.getUserInfo',
        ),
        'peopleaggregator.getAlbums' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'albums' => array(
                        'item' => array(
                            'content' => array(
                                'access' => array(
                                    'values' => array(
                                        'read',
                                        'write',
                                    ),
                                    'type' => 'enum',
                                ),
                                'created' => array(
                                    'optional' => TRUE,
                                    'type' => 'string',
                                ),
                                'type' => array(
                                    'item' => array(
                                        'values' => array(
                                            'image',
                                            'audio',
                                            'video',
                                        ),
                                        'type' => 'enum',
                                    ),
                                    'type' => 'array',
                                ),
                                'id' => array(
                                    'type' => 'string',
                                ),
                                'title' => array(
                                    'type' => 'string',
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'optional' => TRUE,
                    'type' => 'string',
                ),
                'context' => array(
                    'default' => 'user',
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.checkToken' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'login' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                    'tokenLifetime' => array(
                        'type' => 'int',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.getUserRelation' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'msg' => array(
                        'type' => 'string',
                    ),
                    'relation' => array(
                        'values' => array(
                            'havent met',
                            'acquaintance',
                            'relation',
                            'good relation',
                            'best relation',
                        ),
                        'type' => 'enum',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'login' => array(
                    'type' => 'string',
                ),
                'relation_login' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.getFolders' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'folders' => array(
                        'item' => array(
                            'content' => array(
                                'name' => array(
                                    'type' => 'string',
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'metaWeblog.getCategories' => array(
            'argstyle' => 'positional',
            'return' => array(
                'item' => array(
                    'content' => array(
                        'htmlUrl' => array(
                            'type' => 'string',
                        ),
                        'rssUrl' => array(
                            'type' => 'string',
                        ),
                        'description' => array(
                            'type' => 'string',
                        ),
                        'categoryId' => array(
                            'type' => 'string',
                        ),
                        'categoryName' => array(
                            'type' => 'string',
                        ),
                    ),
                    'type' => 'hash',
                    'allow_extra_keys' => 0,
                ),
                'type' => 'array',
            ),
            'args' => array(
                'login' => array(
                    'type' => 'string',
                ),
                'password' => array(
                    'type' => 'string',
                ),
                'blogid' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
            'argorder' => array(
                'blogid',
                'login',
                'password',
            ),
        ),
        'example.echo' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'echoText' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'echoText' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.deleteFile' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'id' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
        'peopleaggregator.getBoardMessages' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'success' => array(
                        'type' => 'boolean',
                    ),
                    'messages' => array(
                        'item' => array(
                            'content' => array(
                                'content' => array(
                                    'type' => 'string',
                                ),
                                'author' => array(
                                    'content' => array(
                                        'id' => array(
                                            'type' => 'string',
                                        ),
                                        'name' => array(
                                            'optional' => TRUE,
                                            'type' => 'string',
                                        ),
                                    ),
                                    'type' => 'hash',
                                    'allow_extra_keys' => 0,
                                ),
                                'created' => array(
                                    'type' => 'string',
                                ),
                                'id' => array(
                                    'type' => 'string',
                                ),
                                'title' => array(
                                    'type' => 'string',
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                    'resultsPerPage' => array(
                        'type' => 'int',
                    ),
                    'totalPages' => array(
                        'type' => 'int',
                    ),
                    'page' => array(
                        'type' => 'int',
                    ),
                    'totalMessages' => array(
                        'type' => 'int',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'default' => '',
                    'type' => 'string',
                ),
                'resultsPerPage' => array(
                    'default' => 100,
                    'max'     => 100,
                    'type'    => 'int',
                    'min'     => 10,
                ),
                'page' => array(
                    'default' => 1,
                    'type'    => 'int',
                    'min'     => 1,
                ),
                'context' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.getFriendAddresses' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'msg' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                    'contacts' => array(
                        'item' => array(
                            'content' => array(
                                'UserName' => array(
                                    'type' => 'string',
                                ),
                                'Email' => array(
                                    'type' => 'string',
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'password' => array(
                    'type' => 'string',
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'serviceName' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.editUserRelation' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'msg' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'relation' => array(
                    'values' => array(
                        'havent met',
                        'acquaintance',
                        'relation',
                        'good relation',
                        'best relation',
                    ),
                    'type' => 'enum',
                ),
            ),
            'type' => 'post',
        ),
        'blogger.deletePost' => array(
            'argstyle' => 'positional',
            'return' => array(
                'type' => 'boolean',
            ),
            'args' => array(
                'appkey' => array(
                    'type' => 'string',
                ),
                'password' => array(
                    'type' => 'string',
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'postid' => array(
                    'type' => 'string',
                ),
                'publish' => array(
                    'type' => 'boolean',
                ),
            ),
            'type' => 'post',
            'argorder' => array(
                'appkey',
                'postid',
                'login',
                'password',
                'publish',
            ),
        ),
        'blogger.getUsersBlogs' => array(
            'argstyle' => 'positional',
            'return' => array(
                'item' => array(
                    'content' => array(
                        'url' => array(
                            'type' => 'string',
                        ),
                        'isAdmin' => array(
                            'type' => 'boolean',
                        ),
                        'blogid' => array(
                            'type' => 'string',
                        ),
                        'blogName' => array(
                            'type' => 'string',
                        ),
                    ),
                    'type' => 'hash',
                    'allow_extra_keys' => 0,
                ),
                'type' => 'array',
            ),
            'args' => array(
                'appkey' => array(
                    'type' => 'string',
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'password' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
            'argorder' => array(
                'appkey',
                'login',
                'password',
            ),
        ),
        'peopleaggregator.newUserRelation' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'msg' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'relation' => array(
                    'values' => array(
                        'havent met',
                        'acquaintance',
                        'relation',
                        'good relation',
                        'best relation',
                    ),
                    'type' => 'enum',
                ),
            ),
            'type' => 'post',
        ),
        'metaWeblog.deletePost' => array(
            'alias' => 'blogger.deletePost',
        ),
        'peopleaggregator.countPersonas' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'count' => array(
                        'type' => 'int',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.getCategories' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'msg' => array(
                        'type' => 'string',
                    ),
                    'totalResults' => array(
                        'type' => 'int',
                    ),
                    'categories' => array(
                        'item' => array(
                            'content' => array(
                                'groupCount' => array(
                                    'type' => 'int',
                                ),
                                'id' => array(
                                    'type' => 'string',
                                ),
                                'name' => array(
                                    'type' => 'string',
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(),
            'type' => 'get',
        ),
        'peopleaggregator.getFiles' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'files' => array(
                        'item' => array(
                            'content' => array(
                                'author' => array(
                                    'type' => 'string',
                                ),
                                'created' => array(
                                    'optional' => TRUE,
                                    'type' => 'string',
                                ),
                                'url' => array(
                                    'optional' => TRUE,
                                    'type' => 'string',
                                ),
                                'title' => array(
                                    'type' => 'string',
                                ),
                                'height' => array(
                                    'optional' => TRUE,
                                    'type' => 'int',
                                ),
                                'content' => array(
                                    'type' => 'string',
                                ),
                                'width' => array(
                                    'optional' => TRUE,
                                    'type' => 'int',
                                ),
                                'type' => array(
                                    'values' => array(
                                        'image',
                                        'audio',
                                        'video',
                                    ),
                                    'type' => 'enum',
                                ),
                                'id' => array(
                                    'type' => 'string',
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 0,
                        ),
                        'type' => 'array',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'context' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
        ),
        'peopleaggregator.getPersona' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'persona' => array(
                        'content' => array(
                            'user_id' => array(
                                'type' => 'int',
                            ),
                            'name' => array(
                                'type' => 'string',
                            ),
                            'sequence' => array(
                                'type' => 'int',
                            ),
                            'persona_service_id' => array(
                                'type' => 'int',
                            ),
                            'configuration' => array(
                                'type' => 'string',
                            ),
                            'persona_id' => array(
                                'type' => 'int',
                            ),
                        ),
                        'type' => 'hash',
                        'allow_extra_keys' => 0,
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'index' => array(
                    'type' => 'int',
                ),
            ),
            'type' => 'get',
        ),
        'metaWeblog.getRecentPosts' => array(
            'argstyle' => 'positional',
            'return' => array(
                'item' => array(
                    'content' => array(
                        'permaLink' => array(
                            'type' => 'string',
                        ),
                        'description' => array(
                            'type' => 'string',
                        ),
                        'title' => array(
                            'type' => 'string',
                        ),
                        'userid' => array(
                            'type' => 'string',
                        ),
                        'dateCreated' => array(
                            'type' => 'datetime',
                        ),
                        'link' => array(
                            'type' => 'string',
                        ),
                        'postid' => array(
                            'type' => 'string',
                        ),
                        'categories' => array(
                            'item' => array(
                                'type' => 'string',
                            ),
                            'type' => 'array',
                        ),
                    ),
                    'type' => 'hash',
                    'allow_extra_keys' => 0,
                ),
                'type' => 'array',
            ),
            'args' => array(
                'login' => array(
                    'type' => 'string',
                ),
                'password' => array(
                    'type' => 'string',
                ),
                'blogid' => array(
                    'type' => 'string',
                ),
                'n_posts' => array(
                    'max' => 50,
                    'type' => 'int',
                ),
            ),
            'type' => 'get',
            'argorder' => array(
                'blogid',
                'login',
                'password',
                'n_posts',
            ),
        ),
        'blogger.getRecentPosts' => array(
            'argstyle' => 'positional',
            'return' => array(
                'item' => array(
                    'content' => array(
                        'content' => array(
                            'type' => 'string',
                        ),
                        'postid' => array(
                            'type' => 'string',
                        ),
                        'userid' => array(
                            'type' => 'string',
                        ),
                        'dateCreated' => array(
                            'type' => 'datetime',
                        ),
                    ),
                    'type' => 'hash',
                    'allow_extra_keys' => 0,
                ),
                'type' => 'array',
            ),
            'args' => array(
                'appkey' => array(
                    'type' => 'string',
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'password' => array(
                    'type' => 'string',
                ),
                'blogid' => array(
                    'type' => 'string',
                ),
                'n_posts' => array(
                    'max' => 50,
                    'type' => 'int',
                ),
            ),
            'type' => 'get',
            'argorder' => array(
                'appkey',
                'blogid',
                'login',
                'password',
                'n_posts',
            ),
        ),
        'peopleaggregator.newBoardMessage' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'id' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'default' => '',
                    'type' => 'string',
                ),
                'content' => array(
                    'type' => 'string',
                ),
                'allowAnonymous' => array(
                    'default' => TRUE,
                    'type' => 'boolean',
                ),
                'context' => array(
                    'type' => 'string',
                ),
                'title' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
        'peopleaggregator.login' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'authToken' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                    'tokenLifetime' => array(
                        'type' => 'int',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'login' => array(
                    'type' => 'string',
                ),
                'password' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
        'peopleaggregator.sendMessage' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'content' => array(
                    'type' => 'string',
                ),
                'recipients' => array(
                    'type' => 'string',
                ),
                'title' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
        'peopleaggregator.deleteUserRelation' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'msg' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'login' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
        'peopleaggregator.errorTest' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(),
            'type' => 'get',
        ),
        'peopleaggregator.deletePersona' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'index' => array(
                    'type' => 'int',
                ),
            ),
            'type' => 'post',
        ),
        'peopleaggregator.newContent' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'url' => array(
                        'type' => 'string',
                    ),
                    'msg' => array(
                        'type' => 'string',
                    ),
                    'errors' => array(
                        'item' => array(
                            'content' => array(
                                'msg' => array(
                                    'type' => 'string',
                                ),
                                'code' => array(
                                    'type' => 'string',
                                ),
                            ),
                            'type' => 'hash',
                            'allow_extra_keys' => 1,
                        ),
                        'type' => 'array',
                    ),
                    'id' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'tags' => array(
                    'type' => 'string',
                ),
                'trackbacks' => array(
                    'default' => '',
                    'type' => 'string',
                ),
                'title' => array(
                    'type' => 'string',
                ),
                'content' => array(
                    'default' => '',
                    'type' => 'string',
                ),
                'context' => array(
                    'default' => '',
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
        'blogger.newPost' => array(
            'argstyle' => 'positional',
            'return' => array(
                'type' => 'string',
            ),
            'args' => array(
                'appkey' => array(
                    'type' => 'string',
                ),
                'publish' => array(
                    'type' => 'boolean',
                ),
                'content' => array(
                    'type' => 'string',
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'password' => array(
                    'type' => 'string',
                ),
                'blogid' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
            'argorder' => array(
                'appkey',
                'blogid',
                'login',
                'password',
                'content',
                'publish',
            ),
        ),
        'peopleaggregator.newFile' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'url' => array(
                        'type' => 'string',
                    ),
                    'id' => array(
                        'type' => 'string',
                    ),
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'access' => array(
                    'default' => 'nobody',
                    'values' => array(
                        'nobody',
                        'everybody',
                        'relations',
                    ),
                    'type' => 'enum',
                ),
                'title' => array(
                    'type' => 'string',
                ),
                'url' => array(
                    'optional' => TRUE,
                    'type' => 'string',
                ),
                'data' => array(
                    'optional' => TRUE,
                    'type' => 'binary',
                ),
                'tags' => array(
                    'default' => '',
                    'type' => 'string',
                ),
                'filename' => array(
                    'optional' => TRUE,
                    'type' => 'string',
                ),
                'content' => array(
                    'type' => 'string',
                ),
                'context' => array(
                    'type' => 'string',
                ),
                'type' => array(
                    'default' => 'image',
                    'values' => array(
                        'image',
                        'audio',
                        'video',
                    ),
                    'type' => 'enum',
                ),
            ),
            'type' => 'post',
        ),
        'metaWeblog.getPost' => array(
            'argstyle' => 'positional',
            'return' => array(
                'content' => array(
                    'permaLink' => array(
                        'type' => 'string',
                    ),
                    'description' => array(
                        'type' => 'string',
                    ),
                    'title' => array(
                        'type' => 'string',
                    ),
                    'userid' => array(
                        'type' => 'string',
                    ),
                    'dateCreated' => array(
                        'type' => 'datetime',
                    ),
                    'link' => array(
                        'type' => 'string',
                    ),
                    'postid' => array(
                        'type' => 'string',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'password' => array(
                    'type' => 'string',
                ),
                'login' => array(
                    'type' => 'string',
                ),
                'postid' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'get',
            'argorder' => array(
                'postid',
                'login',
                'password',
            ),
        ),
        'metaWeblog.getUsersBlogs' => array(
            'alias' => 'blogger.getUsersBlogs',
        ),
        'peopleaggregator.leaveGroup' => array(
            'argstyle' => 'named',
            'return' => array(
                'content' => array(
                    'success' => array(
                        'type' => 'boolean',
                    ),
                ),
                'type' => 'hash',
                'allow_extra_keys' => 0,
            ),
            'args' => array(
                'authToken' => array(
                    'type' => 'string',
                ),
                'id' => array(
                    'type' => 'string',
                ),
            ),
            'type' => 'post',
        ),
    ),
);
?>
