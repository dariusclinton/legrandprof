<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a511c3cfc2f134ceae5e09384aa66a18813cccc8dec6330e566d32b5e750476b extends Twig_Template
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
        $__internal_211d5853e49747778b7c37d8197b01ede58c9c27376d1ba0997cdb949f248062 = $this->env->getExtension("native_profiler");
        $__internal_211d5853e49747778b7c37d8197b01ede58c9c27376d1ba0997cdb949f248062->enter($__internal_211d5853e49747778b7c37d8197b01ede58c9c27376d1ba0997cdb949f248062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_211d5853e49747778b7c37d8197b01ede58c9c27376d1ba0997cdb949f248062->leave($__internal_211d5853e49747778b7c37d8197b01ede58c9c27376d1ba0997cdb949f248062_prof);

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
