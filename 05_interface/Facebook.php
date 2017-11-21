<?php 
class Facebook implements Likeable {
    
    private $like;
    private $user;

        public function __construct($user)
        {
            $this->like = 0;
            $this->user = $user;
        }

        public function getPlatform()
        {
            return 'Facebook';
        }

        public function getUser()
        {
            return $this->user;
        }

        public function getTotalLike()
        {
            return $this->like;
        }

        public function setLike()
        {
            $this->like++;
        }
}

?>