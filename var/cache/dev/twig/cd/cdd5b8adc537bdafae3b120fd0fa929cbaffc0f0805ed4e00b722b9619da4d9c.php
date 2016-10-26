<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_52c6d34742ff334132dcce3501fe33e5fbe7c8f4a43ba767a3b10149865e5d87 extends Twig_Template
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
        $__internal_8f35f762a187be27edead27cf793c0835d84d40db9780c57161dc378d2d32d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f35f762a187be27edead27cf793c0835d84d40db9780c57161dc378d2d32d1c->enter($__internal_8f35f762a187be27edead27cf793c0835d84d40db9780c57161dc378d2d32d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_8f35f762a187be27edead27cf793c0835d84d40db9780c57161dc378d2d32d1c->leave($__internal_8f35f762a187be27edead27cf793c0835d84d40db9780c57161dc378d2d32d1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
