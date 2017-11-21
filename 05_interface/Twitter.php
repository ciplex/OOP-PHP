<?php 
class Twitter implements Likeable {
    
    private $retweet;
    private $user;
    private $tweet;
    
        public function __construct($user)
        {
            $this->retweet = 0;
            $this->user = $user;
        }

        public function getPlatform()
        {
            return 'Twitter';
        }

        public function getUser()
        {
            return $this->user;
        }

        public function getTotalLike()
        {
            return $this->retweet;
        }

        public function setLike()
        {
            $this->setRetweet();
        }

        private function setRetweet()
        {
             $this->retweet++;
        }
}

?>