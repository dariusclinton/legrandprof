<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2dc0855602b9ce2505cf7ebefe37aea75857ab930a32e453dbc9a86099e7f53f extends Twig_Template
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
        $__internal_079f98c07019480309c28891913e49cfab687911d546c5f6a477490813ccfefe = $this->env->getExtension("native_profiler");
        $__internal_079f98c07019480309c28891913e49cfab687911d546c5f6a477490813ccfefe->enter($__internal_079f98c07019480309c28891913e49cfab687911d546c5f6a477490813ccfefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_079f98c07019480309c28891913e49cfab687911d546c5f6a477490813ccfefe->leave($__internal_079f98c07019480309c28891913e49cfab687911d546c5f6a477490813ccfefe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'submit')) ?>*/
/* */
