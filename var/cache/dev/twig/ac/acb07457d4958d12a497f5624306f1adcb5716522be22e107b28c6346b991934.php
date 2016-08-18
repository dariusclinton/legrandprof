<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5e96c41adfadf106bf9158f426eb75dd4893745ca81eb78bc40d372651b98d90 extends Twig_Template
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
        $__internal_49a593d82eb9b0833a604ca4a513f9d7aea8e7f419643495824724c8a3996f0e = $this->env->getExtension("native_profiler");
        $__internal_49a593d82eb9b0833a604ca4a513f9d7aea8e7f419643495824724c8a3996f0e->enter($__internal_49a593d82eb9b0833a604ca4a513f9d7aea8e7f419643495824724c8a3996f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_49a593d82eb9b0833a604ca4a513f9d7aea8e7f419643495824724c8a3996f0e->leave($__internal_49a593d82eb9b0833a604ca4a513f9d7aea8e7f419643495824724c8a3996f0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
