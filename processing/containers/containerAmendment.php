<?php
    autoloader("actionArticle");

    class containerAmendment
    {
        private $amendments;

        public function __construct()
        {
            $this->$amendments = new ArrayObject();
        }

        public function addAmendment($id, $libelle, $article)
        {
            $this->$amendments->append(new amendment($id, $libelle, $article));
        }

        public function listAmendment()
        {
            foreach ($this->amendments as $amendment)
            {
                
            }
        }
    }
?>