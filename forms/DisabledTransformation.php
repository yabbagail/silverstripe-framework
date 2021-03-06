<?php
/**
 * Transformation that disables all the fields on the form.
 * @package forms
 * @subpackage transformations
 */
class DisabledTransformation extends FormTransformation {
	public function transform(FormField $field) {
		return $field->performDisabledTransformation($this);
	}
}

