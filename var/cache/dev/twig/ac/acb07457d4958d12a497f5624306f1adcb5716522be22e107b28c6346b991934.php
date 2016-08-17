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
        $__internal_feb481b5269f145c9bd246d76c7351560035e1ea3feb9ae97b204131a6d99e4f = $this->env->getExtension("native_profiler");
        $__internal_feb481b5269f145c9bd246d76c7351560035e1ea3feb9ae97b204131a6d99e4f->enter($__internal_feb481b5269f145c9bd246d76c7351560035e1ea3feb9ae97b204131a6d99e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_feb481b5269f145c9bd246d76c7351560035e1ea3feb9ae97b204131a6d99e4f->leave($__internal_feb481b5269f145c9bd246d76c7351560035e1ea3feb9ae97b204131a6d99e4f_prof);

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
