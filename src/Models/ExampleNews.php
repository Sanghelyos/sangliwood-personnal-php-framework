<?php

namespace App\Models;
use App\DefaultApp\DatabaseRequests;

class ExampleNews
{ 

    private $_dbHandler;

    private $_id, $_title, $_content, $_date, $_img, $_link;



        public function __construct(){

            // if using Database
            // $this->_dbHandler = new DatabaseRequests();

        }

        public function getNews() {
            
            // using DatabaseRequest module for requests
            // $reqData = $this->_dbHandler->SelectAll('SELECT * FROM news ORDER BY date ASC');

            // for no database example
            $reqData = [
                        ['id' => "1",
                        'title' => "title 1",
                        "content" => "content 1",
                        "date" => date('d-m-Y h:i'),
                        "link" => "https://www.google.fr",
                        "img" => "https://www.tibs.org.tw/images/default.jpg"],
                        ["id" => "2",
                        'title' => "title 2",
                        "content" => "content 2",
                        "date" => date('d-m-Y h:i'),
                        "link" => "https://www.google.fr",
                        "img" => "https://www.tibs.org.tw/images/default.jpg"],
                        ["id" => "3",
                        'title' => "title 3",
                        "content" => "content 3",
                        "date" => date('d-m-Y h:i'),
                        "link" => "https://www.google.fr",
                        "img" => "https://www.tibs.org.tw/images/default.jpg"],
                        ["id" => "4",
                        'title' => "title 4",
                        "content" => "content 4",
                        "date" => date('d-m-Y h:i'),
                        "link" => "https://www.google.fr",
                        "img" => "https://www.tibs.org.tw/images/default.jpg"],
            ];
            foreach($reqData as $data){
                $object[$data['id']] = new ExampleNews();
                $object[$data['id']]->setTitle($data['title'])
                                    ->setContent($data['content'])
                                    ->setDate($data['date'])
                                    ->setId($data['id'])
                                    ->setLink($data['link'])
                                    ->setImg($data['img']);
            }
            return $object;
        }

        public function insertNews() {

            $response = $this->_dbHandler->Insert(" INSERT INTO news ( title, content, img, link )
            VALUES (:title, :content, :img, :link) ", [
                                                        ':title' => $this->_title,
                                                        ':content' => $this->_content,
                                                        ':img' => $this->_img,
                                                        ':link' => $this->_link
                                                        ]);
            return $response;

        }
        

        public function getTitle() {
            return $this->_title;
        }

        public function setTitle($title) {
            $this->_title = $title;
            return $this;
        }

        public function getContent() {
            return $this->_content;
        }

        public function setContent($content) {
            $this->_content = $content;
            return $this;
        }

        public function getId() {
            return $this->_id;
        }

        public function setId($id) {
            $this->_id = $id;
            return $this;
        }


        public function getDate() {
            return $this->_date;
        }

        public function setDate($date) {
            $this->_date = $date;
            return $this;
        }

        public function setImg($img) {
            $this->_img = $img;
            return $this;
        }

        public function getImg() {
            return $this->_img;
        }

        public function setLink($link) {
            $this->_link = $link;
            return $this;
        }

        public function getLink() {
            return $this->_link;
        }

}