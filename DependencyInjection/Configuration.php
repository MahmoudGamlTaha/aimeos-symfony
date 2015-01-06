<?php

/**
 * @license MIT, http://opensource.org/licenses/MIT
 * @copyright Aimeos (aimeos.org), 2014
 */


namespace Aimeos\ShopBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder();
		$rootNode = $treeBuilder->root( 'aimeos_shop' );

		$rootNode
			->children()
				->booleanNode('apc_enable')->defaultValue( true )->end()
				->scalarNode('apc_prefix')->defaultValue( 'shop:' )->end()
				->variableNode('classes')->defaultValue( array() )->end()
				->variableNode('client')->defaultValue( array() )->end()
				->variableNode('controller')->defaultValue( array() )->end()
				->variableNode('i18n')->defaultValue( array() )->end()
				->variableNode('madmin')->defaultValue( array() )->end()
				->variableNode('mshop')->defaultValue( array() )->end()
				->variableNode('resource')->defaultValue( array() )->end()
			->end()
		;

		return $treeBuilder;
    }
}