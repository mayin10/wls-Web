<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\I18n\I18n;
use Cake\Mailer\Mailer;
/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactsController extends AppController
{

    public function add($locale)
    {
        if($locale==null){
            $locale = 'zh_CN';
        }
        I18n::setLocale($locale);


    }

    public function sendmail(){
        $content['name']= $this->request->getQuery('name');
        $content['email']= $this->request->getQuery('email');
        $content['subject']=$this->request->getQuery('subject');
        $content['message']= $this->request->getQuery('message');
        $mailer = new Mailer('default');
        //support@wlsphoenix.de

        $mailer->setFrom(['info@wlsphoenix.de' => 'WLS Phoenix'])
        ->setTo('info@wlsphoenix.de')
        ->setSubject(__('您收到一个新消息'));
        $mailer->setEmailFormat('html');
        $mailer ->viewBuilder()
            ->setTemplate('default')
            ->setLayout('default');

        $mailer->setViewVars(['content' => $content]);
        $mailer->deliver();
      //  $this->output($content);
       $this->autoRender =false;
    }

    public function agb(){

    }
    public function privacyPolicy () {

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
       // I18n::setLocale('zh_CN');
        echo __('msg');
        $contacts = $this->paginate($this->Contacts);

        $this->set(compact('contacts'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

       // I18n::setLocale('de_EN');
        $contact = $this->Contacts->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('contact'));
    }


    public function locale(){
        if($this->request->is('post')){
            $locale = $this->request->getData('locale');
            I18n::setLocale($locale);
            return $this->redirect(['action' => 'index']);
        }
    }

    public function output($d){
        $this->autoRender = false;
        echo '<pre>';
        print_r($d);
        echo '</pre>';
    }



    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */


    /**
     * Edit method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contact = $this->Contacts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {
                $this->Flash->success(__('The contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact could not be saved. Please, try again.'));
        }
        $this->set(compact('contact'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contact = $this->Contacts->get($id);
        if ($this->Contacts->delete($contact)) {
            $this->Flash->success(__('The contact has been deleted.'));
        } else {
            $this->Flash->error(__('The contact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
