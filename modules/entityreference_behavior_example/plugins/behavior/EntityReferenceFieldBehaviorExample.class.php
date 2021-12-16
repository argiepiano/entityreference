<?php

class EntityReferenceFieldBehaviorExample extends EntityReferenceBehaviorHandler {

  public function load($entity_type, $entities, $field, $instances, $langcode, &$items) {
    backdrop_set_message(t('Do something on load!'));
  }

  public function insert($entity_type, $entity, $field, $instance, $langcode, &$items) {
    backdrop_set_message(t('Do something on insert!'));
  }

  public function update($entity_type, $entity, $field, $instance, $langcode, &$items) {
    backdrop_set_message(t('Do something on update!'));
  }

  public function delete($entity_type, $entity, $field, $instance, $langcode, &$items) {
    backdrop_set_message(t('Do something on delete!'));
  }

  /**
   * Generate a settings form for this handler.
   */
  public function settingsForm($field, $instance) {
    $form['test_field'] = array(
      '#type' => 'checkbox',
      '#title' => t('Field behavior setting'),
    );
    return $form;
  }
}
