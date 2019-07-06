<?php

namespace MadeByBob\VoyagerImpersonate\Actions;

use TCG\Voyager\Actions\AbstractAction;

class ImpersonateAction extends AbstractAction
{
    public function getTitle()
    {
        return '';
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'edit';
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'users';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right',
            'style' => 'margin-right: 5px;'
        ];
    }

    public function getDefaultRoute()
    {
        return route('impersonate', $this->data->{$this->data->getKeyName()});
    }

}