<?php
include __DIR__ . "/cfg.php";

class helper {
    public $nameone;
    public $nametwo;

    public function __construct(){
        $this->setConfig();
    }

    // Задать значения свойств из Config
    private function setConfig(){
        $cfg = new Config();
        $this->nameone = $cfg->nameone;
        $this->nametwo = $cfg->nametwo;
    }

    public function header() {
        echo "<header class=''>";
        echo    "<a class='logo' href=''>".$this->nameone." <span>".$this->nametwo."</span></a>";
        echo    "<ul class='navlist'>";
        echo        "<li><a style='color: var(--glavny-color);' href='index.php'>Главная</a></li>";
        echo        "<li><a href='vibor.php'>Навигация</a></li>";
        echo        "<li><a href='auth/auth.php'>Аккаунт</a></li>";
        echo        "<li><a class='login' href='uk.php'>Сменить язык</a></li>";
        echo    "</ul>";
        echo "</header>";
    }

    public function addParam(String $title, String $desc){
        echo '<div class="wbox">';
        echo    '<h1 class="title">'.$title.'</h1>';
        echo    '<p class="desc">'.$desc.'</p>';
        echo '</div>';
    }

    public function preset() {
        $this->addParam("хуй", "хуй");
        $this->addParam("хуй", "хуй");
        $this->addParam("хуй", "хуй");
        $this->addParam("хуй", "хуй");
        $this->addParam("хуй", "хуй");
        $this->addParam("хуй", "хуй");
    }
    /*
    * @param $question - заголовок вопроса FAQ
    * @param $answer - ответ на вопрос FAQ
    */
    public function addQuestionFAQ(String $question, String $answer) {
        echo("
            <div class='faq'>
                <div class='question'>
                    <h2 class='qatitle'>$question</h2>
                    <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewbox='0 0 24 24' style='fill: rgb(255, 255, 255);'><path d='M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z'></path></svg>
                </div>
                <div class='answer'>
                     <p> $answer
                    </p>
                </div>
            </div>
            ");
    }

    public function presetFAQ() {
        $this->addQuestionFAQ("Часто ли вы дрочите?", "Да, примерно 4 раза в день"); // ПРИМЕР ДОБАВЛЕНИЯ ВОПРОСА В FAQ
    }
}
?>