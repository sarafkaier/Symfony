<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.loader' shared service.

$this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->load('getTemplating_LocatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : ($this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, $this->targetDirs[3]);

$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), '!Framework');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), '!Security');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), '!Twig');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), '!Swiftmailer');
$instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
$instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
$instance->addPath(($this->targetDirs[3].'\\src\\OC\\PlatformBundle/Resources/views'), 'OCPlatform');
$instance->addPath(($this->targetDirs[3].'\\src\\OC\\PlatformBundle/Resources/views'), '!OCPlatform');
$instance->addPath(($this->targetDirs[3].'\\src\\OC\\CoreBundle/Resources/views'), 'OCCore');
$instance->addPath(($this->targetDirs[3].'\\src\\OC\\CoreBundle/Resources/views'), '!OCCore');
$instance->addPath(($this->targetDirs[3].'\\src\\OC\\UserBundle/Resources/views'), 'OCUser');
$instance->addPath(($this->targetDirs[3].'\\src\\OC\\UserBundle/Resources/views'), 'FOSUser');
$instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/views'), 'FOSUser');
$instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/views'), '!FOSUser');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));

return $instance;
