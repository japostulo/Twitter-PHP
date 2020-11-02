<?php
    use App\Tweet\Tweet;
    use App\User\User;
    use App\Post\Post;
    use App\Comment\Comment;
    use App\Chat\Chat;
    use App\Follow\Follow;
    use App\Like\Like;
    use App\Message\Message;
    use App\UserChat\UserChat;
    use App\Model\UserDao;
    use App\Model\PostDao;
    use App\Model\CommentDao;
    use App\Model\ChatDao;
    use App\Model\FollowDao;
    use App\Model\LikeDao;
    use App\Model\MessageDao;
    use App\Model\UserChatDao;

    require_once 'vendor/autoload.php';
    /*
    //CREATE
    $user = new User();
    $user->setId(1);
    $user->setName('João Apostulo Teste');
    $user->setUsername('joaodiadema');
    $user->setPassword('123');
    $user->setEmail('joaodiadema@hotmail.com');
    $user->setImage('joaoImage');

    $userDao = new UserDao();
    $userDao->create($user);
    */

    /*
    //UPDATE
    $user = new User();
    $user->setId(22);
    $user->setName('João Apostulo Teste01');
    $user->setUsername('joaodiadema old');
    $user->setPassword('123');
    $user->setEmail('joaodiadema@hotmail.com');
    $user->setImage('joaoImage');

    $userDao = new UserDao();
    $userDao->update($user);
    */

    /* 
    // READ
    echo '<pre>';
    $userDao = new UserDao();
    print_r($userDao->read());
    */

    /*
    // DELETE
    $userDao = new UserDao();
    $userDao->delete(20);
    */

    /*
    // CREATE
    $post = new Post();
    $post->setPost('Post Teste bixão');
    $post->setUserId(1);

    $postDao = new PostDao();
    $postDao->create($post);
    */

    /*
    // READ
    echo '<pre>';
    print_r(PostDao::read());
    */

    /*
    // UPDATE
    $post = new Post();
    $post->setId(18);
    $post->setUserId(2);
    $post->setPost('Postão alterado');

    PostDao::update($post);
    */

    /*
    // DELETE
    PostDao::delete(18);
    echo '<pre>';
    print_r(PostDao::read());
    */
    
    // CREATE   
    // $comment = new Comment();
    // $comment->setId(17);
    // $comment->setComment('YO SOY JOGADOR DE LOLI');
    // $comment->setUserId(2);
    // $comment->setPostId(15);

    // $commentDao = new CommentDao();
    // $commentDao->create($comment);

    // READ
    // echo '<pre>';
    // print_r($commentDao->read());

    // Update
    // CommentDao::update($comment);

    // DELETE
    // CommentDao::delete(16);

    // CREATE
    // $chat = new Chat();
    // $chat->setId(10);
    // $chatDao = new ChatDao();
    // $chatDao->create($chat);

    // READ
    // echo '<pre>';
    // print_r(ChatDao::read());

    // UPDATE
    
    // DELETE
    // ChatDao::delete(10);


    // CREATE
    // $follow = new Follow();
    // $follow->setId('37');
    // $follow->setUserId('1');
    // $follow->setFollowId('2');

    // $followDao = new FollowDao();
    // $followDao->create($follow);


    // READ
    // echo '<pre>';
    // print_r(FollowDao::read());

    // UPDATE
    // $followDao->update($follow);

    
    // DELETE
    // FollowDao::delete('36');


    // CREATE
    // $like = new Like();
    // $like->setId(8);
    // $like->setUserId(1);
    // $like->setPostId(2);

    // $likeDao = new LikeDao();
    // $likeDao->create($like);

    // UPDATE
    // echo '<pre>';
    // print_r(LikeDao::read());

    // UPDATE
    // $likeDao->update($like);

    // DELETE
    // LikeDao::delete(8);


    // CREATE
    // $message = new Message();
    // $message->setId(331);
    // $message->setMessage('Nova Mensagem alterada');
    // $message->setUserId('2');
    // $message->setChatId('2');
    
    // $messageDao = new MessageDao();
    // $messageDao->create($message);

    // READ
    // echo '<pre>';
    // print_r(MessageDao::read());

    // UPDATE
    // MessageDao::update($message);

    // DELETE
    // MessageDao::delete(331);

    // CREATE
    // $userChat = new UserChat();
    // $userChat->setId(12);
    // $userChat->setChatId(2);
    // $userChat->setUserId(1);
    // $userChat->setUserId2(16);
    
    // $userChatDao = new UserChatDao();
    // $userChatDao->create($userChat);

    // READ
    // echo '<pre>';
    // print_r(UserChatDao::read());

    // UPDATE
    // UserChatDao::update($userChat);

    // DELATE   
    // $userChatDao->delete(12);







    // $tweet = new Tweet('1', 'Porque usar -> ao invés do .?');

    // $user = new User('1', 'Japostulo', 'João Apostulo Neto', 'japostulo@gmail.com');

    // $user->print();

    // $tweet->print();

?>