<?php
$namespace$

class $className$Controller extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
		$pluralVar$ = $className$::find();
		$this->view->setVar('$plural$', $pluralVar$);
    }
	
	/**
     * View a $singular$
     *
     * @param string $pkVar$
     */
	public function viewAction($pkVar$)
    {
        $singularVar$ = $className$::findFirstBy$pk$($pkVar$);
		if (!$singularVar$) {
			$this->flash->error("$singular$ was not found");
			return $this->response->redirect("$plural$/index");
		}
        $this->view->$plural$ = $singularVar$;
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {
		if ($this->request->isPost()) {
			$singularVar$ = new $className$();

			$assignInputFromRequestCreate$

			if (!$singularVar$->save()) {
				foreach ($singularVar$->getMessages() as $message) {
					$this->flash->error($message);
				}
				return $this->response->redirect("$plural$/new");
			}

			$this->flash->success("$singular$ was created successfully");
			return $this->response->redirect("$plural$/index");
        }
    }

    /**
     * Edits a $singular$
     *
     * @param string $pkVar$
     */
    public function editAction($pkVar$)
    {
        if (!$this->request->isPost()) {
            $singularVar$ = $className$::findFirstBy$pk$($pkVar$);
            if (!$singularVar$) {
                $this->flash->error("$singular$ was not found");
				return $this->response->redirect("$plural$/index");
            }

            $this->view->primary_key = $singularVar$->$pk$;

            $assignTagDefaults$
        }
		else{
			$singularVar$ = $className$::findFirstBy$pk$($pkVar$);
			if (!$singularVar$) {
				$this->flash->error("$singular$ does not exist " . $pkVar$);
				return $this->response->redirect("$plural$/index");
			}

			$assignInputFromRequestUpdate$

			if (!$singularVar$->save()) {

				foreach ($singularVar$->getMessages() as $message) {
					$this->flash->error($message);
				}
				return $this->response->redirect("$plural$/edit/".$singularVar$->$pk$);
			}

			$this->flash->success("$singular$ was updated successfully");
			return $this->response->redirect("$plural$/index");
		}
    }


    /**
     * Deletes a $singular$
     *
     * @param string $pkVar$
     */
    public function deleteAction($pkVar$)
    {

        $singularVar$ = $className$::findFirstBy$pk$($pkVar$);
        if (!$singularVar$) {
            $this->flash->error("$singular$ was not found");
			return $this->response->redirect("$plural$/index");
        }

        if (!$singularVar$->delete()) {

            foreach ($singularVar$->getMessages() as $message) {
                $this->flash->error($message);
            }
			return $this->response->redirect("$plural$/index");
        }

        $this->flash->success("$singular$ was deleted successfully");
		return $this->response->redirect("$plural$/index");
    }
}
