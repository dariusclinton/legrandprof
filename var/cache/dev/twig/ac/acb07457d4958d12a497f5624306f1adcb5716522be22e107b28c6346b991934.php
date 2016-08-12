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
        $__internal_d71e5e2ec29c37dbffb89ce0f630b65d9e780e2f468264cfd814dd26caa6faad = $this->env->getExtension("native_profiler");
        $__internal_d71e5e2ec29c37dbffb89ce0f630b65d9e780e2f468264cfd814dd26caa6faad->enter($__internal_d71e5e2ec29c37dbffb89ce0f630b65d9e780e2f468264cfd814dd26caa6faad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d71e5e2ec29c37dbffb89ce0f630b65d9e780e2f468264cfd814dd26caa6faad->leave($__internal_d71e5e2ec29c37dbffb89ce0f630b65d9e780e2f468264cfd814dd26caa6faad_prof);

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
