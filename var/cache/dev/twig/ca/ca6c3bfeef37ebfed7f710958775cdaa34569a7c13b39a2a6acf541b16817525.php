<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8f4bdc9e748d50ca2a39f5f40098c13dc11034e000279c9be92a4c15641510a8 extends Twig_Template
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
        $__internal_4b2ff02f828a6d20a10fe836cc8dc306dea8c81028844bf3a37e0bd0c8ea593a = $this->env->getExtension("native_profiler");
        $__internal_4b2ff02f828a6d20a10fe836cc8dc306dea8c81028844bf3a37e0bd0c8ea593a->enter($__internal_4b2ff02f828a6d20a10fe836cc8dc306dea8c81028844bf3a37e0bd0c8ea593a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4b2ff02f828a6d20a10fe836cc8dc306dea8c81028844bf3a37e0bd0c8ea593a->leave($__internal_4b2ff02f828a6d20a10fe836cc8dc306dea8c81028844bf3a37e0bd0c8ea593a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
