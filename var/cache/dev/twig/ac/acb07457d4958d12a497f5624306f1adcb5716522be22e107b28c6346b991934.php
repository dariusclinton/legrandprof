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
        $__internal_595c73bd1e32df2ceede5789c52c71cb33e86a24e303dd49598fb183a9637b0b = $this->env->getExtension("native_profiler");
        $__internal_595c73bd1e32df2ceede5789c52c71cb33e86a24e303dd49598fb183a9637b0b->enter($__internal_595c73bd1e32df2ceede5789c52c71cb33e86a24e303dd49598fb183a9637b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_595c73bd1e32df2ceede5789c52c71cb33e86a24e303dd49598fb183a9637b0b->leave($__internal_595c73bd1e32df2ceede5789c52c71cb33e86a24e303dd49598fb183a9637b0b_prof);

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
