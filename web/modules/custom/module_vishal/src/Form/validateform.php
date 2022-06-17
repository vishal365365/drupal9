<?php
/**
 * @file
 * Contains \Drupal\module_vishal\Form\validateform.
 */
namespace Drupal\module_vishal\Form;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class validateform extends FormBase {
  /**
   * {@inheritdoc}
   */
  protected $sms;
  public function __construct(MessengerInterface $mess){
    $this->sms = $mess;
  }

  public static function create(ContainerInterface $cot){
    return new static($cot->get("messenger"));
    
  }

public function getFormId() {
    return 'validationform';
}

public function buildForm(array $form, FormStateInterface $form_state) {
    $form['student_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Enter Name:'),
      '#required' => TRUE,
    );
    $form['student_rollno'] = array(
      '#type' => 'textfield',
      '#title' => t('Enter Enrollment Number:'),
      '#required' => TRUE,
    );
    $form['student_mail'] = array(
      '#type' => 'email',
      '#title' => t('Enter Email ID:'),
      '#required' => TRUE,
    );

    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Register'),
      '#button_type' => 'primary',
    );
    return $form;

}

public function submitForm(array &$form, FormStateInterface $form_state) {
  $this->sms->addMessage("ggggggw");
  \Drupal::messenger()->addMessage(t("Student Registration Done!! Registered Values are:"));
foreach ($form_state->getValues() as $key => $value) {
  \Drupal::messenger()->addMessage($key . ': ' . $value);
  }
}

}