<?php

class EntityReferenceInstanceBehaviorExample extends EntityReferenceBehaviorHandler {

  public function load($entity_type, $entities, $field, $instances, $langcode, &$items) {
    backdrop_set_message(t('Do something on load, on the instance level!'));
  }

  public function insert($entity_type, $entity, $field, $instance, $langcode, &$items) {
    backdrop_set_message(t('Do something on insert, on the instance level!'));
  }

  public function update($entity_type, $entity, $field, $instance, $langcode, &$items) {
    backdrop_set_message(t('Do something on update, on the instance level!'));
  }

  public function delete($entity_type, $entity, $field, $instance, $langcode, &$items) {
    backdrop_set_message(t('Do something on delete, on the instance level!'));
  }

  /**
   * Generate a settings form for this handler.
   */
  public function settingsForm($field, $instance) {
    $form['test_instance'] = array(
      '#type' => 'checkbox',
      '#title' => t('Instance behavior setting'),
    );
    return $form;
  }
}