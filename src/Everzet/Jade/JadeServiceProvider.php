<?php namespace Everzet\Jade;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class JadeServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

  public function boot()
  {
    $this->package('everzet/jade');

    AliasLoader::getInstance()->alias('Jade','Everzet\Jade\Jade');
    AliasLoader::getInstance()->alias('PHPDumper','Everzet\Jade\Dumper\PHPDumper');
    AliasLoader::getInstance()->alias('AutotagsVisitor','Everzet\Jade\Visitor\AutotagsVisitor');
    AliasLoader::getInstance()->alias('JavaScriptFilter','Everzet\Jade\Filter\JavaScriptFilter');
    AliasLoader::getInstance()->alias('CDATAFilter','Everzet\Jade\Filter\CDATAFilter');
    AliasLoader::getInstance()->alias('PHPFilter','Everzet\Jade\Filter\PHPFilter');
    AliasLoader::getInstance()->alias('CSSFilter','Everzet\Jade\Filter\CSSFilter');
    AliasLoader::getInstance()->alias('Lexer', 'Everzet\Jade\Lexer\Lexer');
    AliasLoader::getInstance()->alias('Parser', 'Everzet\Jade\Parser');
    AliasLoader::getInstance()->alias('Node', 'Everzet\Jade\Node\Node');
    AliasLoader::getInstance()->alias('BlockNode', 'Everzet\Jade\Node\BlockNode');
    AliasLoader::getInstance()->alias('CodeNode', 'Everzet\Jade\Node\CodeNode');
    AliasLoader::getInstance()->alias('CommentNode', 'Everzet\Jade\Node\CommentNode');
    AliasLoader::getInstance()->alias('DoctypeNode', 'Everzet\Jade\Node\DoctypeNode');
    AliasLoader::getInstance()->alias('FilterNode', 'Everzet\Jade\Node\FilterNode');
    AliasLoader::getInstance()->alias('TagNode', 'Everzet\Jade\Node\TagNode');
    AliasLoader::getInstance()->alias('TextNode', 'Everzet\Jade\Node\TextNode');
  }


	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
