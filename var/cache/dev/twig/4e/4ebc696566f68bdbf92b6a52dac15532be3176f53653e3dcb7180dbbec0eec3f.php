<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_4bc7c4e24912918d40efeca876f306d01556bccfb820aa71e038c761b5a9da4e extends Twig_Template
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
        $__internal_b093d1b0c860d0946683699fe55614332c56fec86dc4b7d2df6add7dfb44041c = $this->env->getExtension("native_profiler");
        $__internal_b093d1b0c860d0946683699fe55614332c56fec86dc4b7d2df6add7dfb44041c->enter($__internal_b093d1b0c860d0946683699fe55614332c56fec86dc4b7d2df6add7dfb44041c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b093d1b0c860d0946683699fe55614332c56fec86dc4b7d2df6add7dfb44041c->leave($__internal_b093d1b0c860d0946683699fe55614332c56fec86dc4b7d2df6add7dfb44041c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
