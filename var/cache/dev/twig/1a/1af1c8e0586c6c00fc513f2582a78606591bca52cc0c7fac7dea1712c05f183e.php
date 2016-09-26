<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_09f632d4aa5ae6bddf11a8997faa42a59820b4c253fa7e6101af29644c85a605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_619fb1464bb145a05b1a8b355e29e781b3d1d5d1e0480a5dc35cdcefc47614af = $this->env->getExtension("native_profiler");
        $__internal_619fb1464bb145a05b1a8b355e29e781b3d1d5d1e0480a5dc35cdcefc47614af->enter($__internal_619fb1464bb145a05b1a8b355e29e781b3d1d5d1e0480a5dc35cdcefc47614af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_619fb1464bb145a05b1a8b355e29e781b3d1d5d1e0480a5dc35cdcefc47614af->leave($__internal_619fb1464bb145a05b1a8b355e29e781b3d1d5d1e0480a5dc35cdcefc47614af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
