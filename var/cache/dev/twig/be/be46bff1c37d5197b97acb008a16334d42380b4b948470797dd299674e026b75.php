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
        $__internal_a78016822f66198a8aabf6253a06df2a2d910b97dddc7a4cb2a30ee2ad83b1bc = $this->env->getExtension("native_profiler");
        $__internal_a78016822f66198a8aabf6253a06df2a2d910b97dddc7a4cb2a30ee2ad83b1bc->enter($__internal_a78016822f66198a8aabf6253a06df2a2d910b97dddc7a4cb2a30ee2ad83b1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a78016822f66198a8aabf6253a06df2a2d910b97dddc7a4cb2a30ee2ad83b1bc->leave($__internal_a78016822f66198a8aabf6253a06df2a2d910b97dddc7a4cb2a30ee2ad83b1bc_prof);

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
