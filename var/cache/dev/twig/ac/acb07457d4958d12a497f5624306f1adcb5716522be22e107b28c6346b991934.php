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
        $__internal_8ace7b3b545827239c6354e674c7a6aa172e3fabb1109cfddc582aeabde29c5e = $this->env->getExtension("native_profiler");
        $__internal_8ace7b3b545827239c6354e674c7a6aa172e3fabb1109cfddc582aeabde29c5e->enter($__internal_8ace7b3b545827239c6354e674c7a6aa172e3fabb1109cfddc582aeabde29c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8ace7b3b545827239c6354e674c7a6aa172e3fabb1109cfddc582aeabde29c5e->leave($__internal_8ace7b3b545827239c6354e674c7a6aa172e3fabb1109cfddc582aeabde29c5e_prof);

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
