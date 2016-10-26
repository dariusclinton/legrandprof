<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7b915c27cc4d3e3ce039f98c8aead46bb82f95721cb1cdd515aa05bedcc9978b extends Twig_Template
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
        $__internal_957755cd6bd9ca9be6f79c83d2ba4e1cb21d0834e75fbc6de5cc5ebcc508e9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957755cd6bd9ca9be6f79c83d2ba4e1cb21d0834e75fbc6de5cc5ebcc508e9ab->enter($__internal_957755cd6bd9ca9be6f79c83d2ba4e1cb21d0834e75fbc6de5cc5ebcc508e9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_957755cd6bd9ca9be6f79c83d2ba4e1cb21d0834e75fbc6de5cc5ebcc508e9ab->leave($__internal_957755cd6bd9ca9be6f79c83d2ba4e1cb21d0834e75fbc6de5cc5ebcc508e9ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
