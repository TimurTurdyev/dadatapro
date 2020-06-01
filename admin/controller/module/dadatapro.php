<?php

class ControllerModuleDadataPro extends Controller {
    public function index() {
        if( isset($this->request->get['token']) && isset($this->session->data['token']) && ( $this->request->get['token'] === $this->session->data['token'] ) ) {
            if( (float)VERSION < 2.3 ) {
                $this->response->redirect($this->url->link('catalog/dadatapro', 'token=' . $this->session->data['token'], true));
            }
        }
    }
}
