<?php


class ForumController{

    function get_all_articles($data=null){
        $model = new Model\ForumModel();
        $result = $model->get_all_articles();
        echo json_encode($result);
        exit;
    }
    function add_new_article($data){
        $id_user = 333;
        $model = new Model\ForumModel();
        $result = $model->add_new_article(
            $data->title,$data->author,$id_user,$data->description,$data->theme);
        echo json_encode($result);
        exit;
    }
    function get_comments($data){
        $model = new Model\ForumModel();
        $result = $model->get_comments(intval($data[0]));
        echo json_encode($result);
        exit;
    }
    function add_comment($data){
        $model = new Model\ForumModel();
        $result = $model->add_comment(
            intval($data->user_id),strval($data->author),intval($data->article_id),strval($data->comment));
        echo json_encode($result);
        exit;
    }


}