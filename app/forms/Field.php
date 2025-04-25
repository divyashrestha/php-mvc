<?php
namespace app\forms;

use divyashrestha\Mvc\form\BaseField;

class Field extends BaseField
{

    public function __toString()
    {
        return sprintf('%s %s', $this->renderLabel(), $this->renderInput());
    }

    public function renderLabel(): string
    {
        return sprintf('<label for="%s">%s %s</label>',
            $this->field_id,
            $this->model->getLabel($this->attribute),
            $this->required_html($this->required),
        );
    }

    private function required_html($required): string
    {
        if ($required) {
            return '<span class="text-danger">*</span>';
        }
        return '';
    }

    public function renderInput(): string
    {
        return sprintf('<input type="%s" class="form-control %s" name="%s" value="%s" id="%s" %s>',
            $this->type,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->field_name,
            $this->model->{$this->attribute},
            $this->field_id,
            implode(" ", $this->optional_attribute)
        );
    }
}