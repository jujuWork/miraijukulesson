<!-- // CellPhone.php -->
<?php
// Define interfaces
interface IPhone {
    public function callPhone();
    public function receivePhone();
}

interface IMailer {
    public function sendMail();
    public function receiveMail();
}

interface IComputer {
    public function playGame();
    public function browseWeb();
}

// Create the CellPhone class that implements all three interfaces
class CellPhone implements IPhone, IMailer, IComputer {
    // Methods for phone actions
    public function callPhone() {
        echo "電話をかける<br>";
    }

    public function receivePhone() {
        echo "電話を受ける<br>";
    }

    // Methods for mail actions
    public function sendMail() {
        echo "メールを送信する<br>";
    }

    public function receiveMail() {
        echo "メールを受信する<br>";
    }

    // Methods for computer actions
    public function playGame() {
        echo "ゲームをする<br>";
    }

    public function browseWeb() {
        echo "ウェブを閲覧する<br>";
    }
}
?>