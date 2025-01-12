<?php
declare(strict_types=1);

require realpath(__DIR__ . '/../../vendor/autoload.php');
class Home extends Controller
{
    
    public function index()
    {
        $this->view('index');
    }

    public function About_Us()
    {
        $this->view('about_us');
    }

    // Whats New starts
    public function TestFormats()
    {
        $this->view('whats1');
    }
    public function BandScoring()
    {
        $this->view('whats2');
    }
     public function ExamDates()
    {
        $this->view('whats3');
    }
     public function IELTSUpdates()
    {
        $this->view('whats4');
    }

   // courses starts
    public function IELTS_Academic_Course()
    {
        $this->view('cacademic');
    }
    public function IELTS_GT_Course()
    {
        $this->view('cgeneral');
    }
    public function IELTS_LS_Course()
    {
        $this->view('clife');
    }
    public function IELTS_UKVI_Course()
    {
        $this->view('cukvi');
    }
    public function IELTS_LCFB_Course()
    {
        $this->view('clcb');
    }
    public function IELTS_LCAL_Course()
    {
        $this->view('clcal');
    }

    // IELTS starts

    public function IELTS_Academic()
    {
        $this->view('iacademic');
    }

    public function IELTS_General_Training()
    {
        $this->view('igt');
    }

    public function IELTS_Life_Skills()
    {
        $this->view('ils');
    }

    public function IELTS_UKVI()
    {
        $this->view('iukvi');
    }

    public function IELTS_Scores()
    {
        $this->view('is');
    }

    public function IELTS_Upcoming_Exam_Dates()
    {
        $this->view('iued');
    }

    public function Alternative_To_IELTS()
    {
        $this->view('ia');
    }

    public function IELTS_FAQ()
    {
        $this->view('ifaq');
    }

    // Lesson Tips

    public function LT_Reading_Tips()
    {
        $this->view('ltrt');
    }

    public function LT_Writing_Tips()
    {
        $this->view('ltwt');
    }

    public function LT_Listening_Tips()
    {
        $this->view('ltlt');
    }

    public function LT_Speaking_Tips()
    {
        $this->view('ltlt');
    }

    public function LT_Grammer_Tips()
    {
        $this->view('ltgt');
    }

    public function LT_Vocabulary_Tips()
    {
        $this->view('ltvt');
    }

    public function LT_Additional_Tips()
    {
        $this->view('ltat');
    }

    // Practice Test

    public function PT_Listening_Tests()
    {
        $this->view('ptlt');
    }

    public function PT_Reading_Tests()
    {
        $this->view('ptrt');
    }

    public function PT_Writing_Tests()
    {
        $this->view('ptwt');
    }

    public function PT_Speaking_Tests()
    {
        $this->view('ptst');
    }

    public function PT_Practice_Tests()
    {
        $this->view('ptptm');
    }

    // Contact

    public function contact_us()
    {
        $this->view('contact');
    }



    
}
