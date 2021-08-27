<?php

namespace App\Models;
use App\DefaultApp\DatabaseRequests;

class ExampleNews
{ 

    private $_dbHandler;

    private $_id, $_title, $_content, $_date, $_img, $_link;



        public function __construct () {

            // if using Database
            // $this->_dbHandler = new DatabaseRequests();

        }

        public function getNews () {
            
            // using DatabaseRequest module for requests
            // $reqData = $this->_dbHandler->SelectAll('SELECT * FROM news ORDER BY date ASC');

            // for no database example
            $googleParsedUrl = parse_url("https://www.google.fr");
            $googleUrl = $googleParsedUrl['host'];
            $placeholderImgParsedUrl = parse_url("https://www.tibs.org.tw/images/default.jpg");
            $placeholderImgUrl = $placeholderImgParsedUrl['scheme'] . "://" . $placeholderImgParsedUrl['host'] . "/" . $placeholderImgParsedUrl['path'];

            $reqData = [
                        [
                            'id' => "1",
                            'title' => "title 1",
                            "content" => "content 1",
                            "date" => date('d-m-Y h:i'),
                            "link" => $googleUrl,
                            "img" => $placeholderImgUrl
                        ],
                        [
                            "id" => "2",
                            'title' => "title 2",
                            "content" => "content 2",
                            "date" => date('d-m-Y h:i'),
                            "link" => $googleUrl,
                            "img" => $placeholderImgUrl
                        ],
                        [
                            "id" => "3",
                            'title' => "title 3",
                            "content" => "content 3",
                            "date" => date('d-m-Y h:i'),
                            "link" => $googleUrl,
                            "img" => $placeholderImgUrl
                        ],
                        [
                            "id" => "4",
                            'title' => "title 4",
                            "content" => "content 4",
                            "date" => date('d-m-Y h:i'),
                            "link" => $googleUrl,
                            "img" => $placeholderImgUrl
                        ]
            ];
            foreach ($reqData as $data) {
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

        public function insertNews () {

            $response = $this->_dbHandler->Insert(" INSERT INTO news ( title, content, img, link )
            VALUES (:title, :content, :img, :link) ", [
                                                        ':title' => $this->_title,
                                                        ':content' => $this->_content,
                                                        ':img' => $this->_img,
                                                        ':link' => $this->_link
                                                        ]);
            return $response;

        }
        
                
        /**
         * getTitle
         *
         * @return string
         */
        public function getTitle (): string {
            return $this->_title;
        }
        
        
        /**
         * setTitle
         *
         * @param  string $title
         * @return object
         */
        public function setTitle (string $title): object {
            $this->_title = $title;
            return $this;
        }
                
        /**
         * getContent
         *
         * @return string
         */
        public function getContent (): string {
            return $this->_content;
        }
        
        /**
         * setContent
         *
         * @param  string $content
         * @return object
         */
        public function setContent (string $content): object {
            $this->_content = $content;
            return $this;
        }
               
        /**
         * getId
         *
         * @return int
         */
        public function getId (): int {
            return $this->_id;
        }
        
        /**
         * setId
         *
         * @param  int $id
         * @return object
         */
        public function setId (int $id): object {
            $this->_id = $id;
            return $this;
        }


        public function getDate () {
            return $this->_date;
        }

        public function setDate ($date) {
            $this->_date = $date;
            return $this;
        }
        
        /**
         * setImg
         *
         * @param  string $img
         * @return object
         */
        public function setImg (string $img): object {
            $this->_img = $img;
            return $this;
        }
        
        /**
         * getImg
         *
         * @return string
         */
        public function getImg (): string {
            return $this->_img;
        }
        
        /**
         * setLink
         *
         * @param  mixed $link
         * @return object
         */
        public function setLink (string $link): object {
            $this->_link = $link;
            return $this;
        }
        
        /**
         * getLink
         *
         * @return string
         */
        public function getLink (): string {
            return $this->_link;
        }

}