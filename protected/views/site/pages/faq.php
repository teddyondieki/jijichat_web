<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app()->name . ' : Frequently Asked Questions';
$this->breadcrumbs = array(
    'FAQ',
);
?>

<div class="desc">
    <h1 class="introHeading">
        Frequently Asked Questions
    </h1>

    <h2 class="faqHeading">
        What is Jijichat?
    </h2>

    <div class="faqBody">
        Jijichat is a social platform for Android smartphones, that enables people communicate freely in public chat rooms while maintaining their privacy. The rooms are based on locations and college campuses with no restrictions to join. 
        Jijichat currently supports text messages with the more expressive emoticons. 
    </div>


    <h2 class="faqHeading">
        What can Jijichat do?
    </h2>

    <div class="faqBody">
        Jijichat lets you interact instantly with people in your chosen location or college. Your privacy is maintained.
    </div>

    <h2 class="faqHeading">
        Is Jijichat free?
    </h2>

    <div class="faqBody">
        Jijichat is free to download, install and use. However, charges may apply depending on your Internet Service Provider. 
    </div>


    <h2 class="faqHeading">
        Will Jijichat users see my phone number?
    </h2>

    <div class="faqBody">
        No. In fact, your phone number is only used for verification and is never stored on our server.
    </div>


    <h2 class="faqHeading">
        Why can't I view the entire message history?
    </h2>

    <div class="faqBody">
        When you connect to Jijichat service, message history is sent to you depending on how long you have been disconnected. A maximum of 25 messages (if any) are included in the history.
    </div>
    <h2 class="faqHeading">
        How do I send a directed message to a room occupant?
    </h2>

    <div class="faqBody">
        To send a directed message to a room occupant(s):-
        <ul>
            <li>
                Include their nickname in your message.
            </li>
            <li>
                Tap on their nickname that is displayed on the message they have sent.
            </li>
            <li>
                Tap on the "Room Info" icon in the room and then tap on the particular occupant's nickname.
            </li>
        </ul>
    </div>

    <p>
        Do you have any questions or suggestions? Please let us know 
        <?php echo CHtml::link('here', array('site/contact')); ?> 
        .
    </p>

</div>
