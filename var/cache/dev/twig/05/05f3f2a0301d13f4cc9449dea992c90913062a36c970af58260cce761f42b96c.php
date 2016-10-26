<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_5b83bba05ce7eed38b9d2337cb08cd6b82e56fd7123c0aa8274279fd732908cb extends Twig_Template
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
        $__internal_91eeb05dd65d4fd79cf410b5cd4c6c49f2d6cf119fa3f0eafa76156114bdc275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91eeb05dd65d4fd79cf410b5cd4c6c49f2d6cf119fa3f0eafa76156114bdc275->enter($__internal_91eeb05dd65d4fd79cf410b5cd4c6c49f2d6cf119fa3f0eafa76156114bdc275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_91eeb05dd65d4fd79cf410b5cd4c6c49f2d6cf119fa3f0eafa76156114bdc275->leave($__internal_91eeb05dd65d4fd79cf410b5cd4c6c49f2d6cf119fa3f0eafa76156114bdc275_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
