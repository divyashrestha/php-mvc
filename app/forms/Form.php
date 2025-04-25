<?php

namespace app\forms;

use divyashrestha\Mvc\db\BaseModel;
use divyashrestha\Mvc\form\BaseForm;

class Form extends BaseForm
{
    public function field(BaseModel $model, string $attribute, bool $required= false, array $options=[]): Field
    {
        $optional_attributes = [];
        foreach ($options as $key => $value) {
            $optional_attributes[] = "$key=\"$value\"";
        }
        return new Field($model, $attribute, $required, $optional_attributes);
    }
}