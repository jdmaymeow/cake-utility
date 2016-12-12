<?php
namespace Cakeutility\Model\Behavior;

use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Table;
use Cake\Utility\Inflector;

/**
 * Sluggable behavior
 */
class SluggableBehavior extends Behavior
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [
        'field' => 'title',
        'slug' => 'slug',
        'replacement' => '-'
    ];

    protected function slug(Entity $entity) {
        $config = $this->config();
        $value = $entity->get($config['field']);
        $entity->set($config['slug'], Inflector::slug($value, $config['replacement']));
    }

    public function beforeSave(Event $event, Entity $entity) {
        $this->slug($entity);
    }
}
