<?php


class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function registerAction()
    {


        $user = new Users();

        $postArray = $this->request->getPost();

        $user->id = $postArray["id"];
        $user->name = $postArray["name"];
        $user->email = $postArray["email"];

        // Store and check for errors
        $success = $user->save();

        if ($success) {
            echo "Thanks for registering!";
        } else {
            echo "Sorry, the following problems were generated: ";

            $messages = $user->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        $this->view->disable();
    }
}

