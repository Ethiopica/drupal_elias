<?php

namespace Drupal\palindrome_checker\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormBuilderInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a "Palindrome Checker" block.
 *
 * @Block(
 *   id = "palindrome_checker_block",
 *   admin_label = @Translation("Palindrome Checker Block")
 * )
 */
class PalindromeBlock extends BlockBase
{

    protected $formBuilder;

    public function __construct(array $configuration, $plugin_id, $plugin_definition, FormBuilderInterface $form_builder)
    {
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->formBuilder = $form_builder;
    }

    public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition)
    {
        return new static(
            $configuration,
            $plugin_id,
            $plugin_definition,
            $container->get('form_builder')
        );
    }

    public function build()
    {
        return $this->formBuilder->getForm('\Drupal\palindrome_checker\Form\PalindromeForm');
    }
}
