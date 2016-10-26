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
        $__internal_32bf54b6d4258f7863bde1ff6549816cfd5bffc93413aad0749bb9946d902ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32bf54b6d4258f7863bde1ff6549816cfd5bffc93413aad0749bb9946d902ce0->enter($__internal_32bf54b6d4258f7863bde1ff6549816cfd5bffc93413aad0749bb9946d902ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_32bf54b6d4258f7863bde1ff6549816cfd5bffc93413aad0749bb9946d902ce0->leave($__internal_32bf54b6d4258f7863bde1ff6549816cfd5bffc93413aad0749bb9946d902ce0_prof);

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
