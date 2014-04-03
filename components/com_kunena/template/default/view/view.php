<?php
/**
 * @version $Id$
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/

// Dont allow direct linking
defined( '_JEXEC' ) or die();

$document = JFactory::getDocument ();
$document->addScriptDeclaration('// <![CDATA[
var kunena_anonymous_name = "'.JText::_('COM_KUNENA_USERNAME_ANONYMOUS').'";
// ]]>');
?>
<div><?php $this->displayPathway(); ?></div>

<?php if ($this->headerdesc) : ?>
	<div id="kforum-head" class="<?php echo isset ( $this->catinfo->class_sfx ) ? ' kforum-headerdesc' . $this->escape($this->catinfo->class_sfx) : '' ?>">
		<?php echo $this->headerdesc ?>
	</div>
<?php endif ?>

<?php
	$this->displayPoll();
	CKunenaTools::showModulePosition( 'kunena_poll' );
	$this->displayThreadActions(0);
?>

<div class="kblock">
	<div class="kheader">
		<h2><span><?php echo JText::_('COM_KUNENA_TOPIC') ?> <?php echo $this->escape($this->kunena_topic_title) ?></span></h2>
		<?php if ($this->favorited) : ?><div class="kfavorite"></div><?php endif ?>
	</div>
	<div class="kcontainer">
		<div class="kbody">
			<?php foreach ( $this->messages as $message ) $this->displayMessage($message) ?>
		</div>
	</div>
</div>
<?php $this->displayThreadActions(1); ?>

<?php if ((CKunenaTools::isModerator ( $this->my->id, $this->catid ) || !$this->topicLocked)&&$this->my->id) :?>

<div class="kblock">
	<div class="kheader">
		<h2><span><?php echo JText::_('COM_KUNENA_BUTTON_QUICKREPLY') ?></span></h2>
	</div>

<div id="kreply<?php echo intval($this->id) ?>_form" class="kreply-form">
	<form action="<?php echo CKunenaLink::GetPostURL(); ?>" method="post" name="postform" enctype="multipart/form-data">
		<input type="hidden" name="parentid" value="<?php echo intval($this->id) ?>" />
		<input type="hidden" name="catid" value="<?php echo intval($this->catid) ?>" />
		<input type="hidden" name="action" value="post" />
		<?php echo JHTML::_( 'form.token' ) ?>
		<?php if ($this->allow_anonymous): ?>
		<input type="text" name="authorname" size="35" class="kinputbox postinput" maxlength="35" value="<?php echo $this->escape($this->myname) ?>" /><br />
		<input type="checkbox" id="kanonymous<?php echo intval($this->id) ?>" name="anonymous" value="1" class="kinputbox postinput" <?php if ($this->anonymous) echo 'checked="checked"'; ?> /> <label for="kanonymous<?php echo intval($this->id) ?>"><?php echo JText::_('COM_KUNENA_POST_AS_ANONYMOUS_DESC') ?></label><br />
		<?php else: ?>
		<input type="hidden" name="authorname" value="<?php echo $this->escape($this->myname) ?>" />
		<?php endif; ?>
		<?php
		include_once ( KUNENA_ABSTMPLTPATH . '/editor/kunena.bbcode2.js.php' );
		CKunenaTools::loadTemplate('/editor/bbcode2.php');
		?>
		<textarea class="ktxtarea required" name="message" id="kbbcode-message" rows="6" cols="60" style="width: 99%;"></textarea><br />
		<?php
		// Add an empty div for the preview.The class name will be set by js depending on horizontal or vertical split
		?>
		<!-- Hidden preview placeholder -->
		<div id="kbbcode-preview" style="display: none;"></div>
		<?php if ($this->my->id && $this->config->allowsubscriptions && $this->cansubscribe) : ?>
			<?php if ($this->config->subscriptionschecked == 1) : ?>
				<input type="checkbox" name="subscribeMe" value="1" checked="checked" />
				<i><?php echo JText::_('COM_KUNENA_POST_NOTIFIED'); ?></i>
				<?php else : ?>
				<input type="checkbox" name="subscribeMe" value="1" />
				<i><?php echo JText::_('COM_KUNENA_POST_NOTIFIED'); ?></i>
			<?php endif; ?><br />
		<?php endif; ?>
		<input type="submit" class="kbutton kreply-submit" name="submit" value="<?php echo JText::_('COM_KUNENA_GEN_CONTINUE') ?>" title="<?php echo (JText::_('COM_KUNENA_EDITOR_HELPLINE_SUBMIT'));?>" />
	</form>
</div>

</div>

<?php endif ?>

<div class = "kforum-pathway-bottom">
	<?php echo $this->kunena_pathway1; ?>
</div>
<!-- B: List Actions Bottom -->
<div class="kcontainer klist-bottom">
	<div class="kbody">
		<div class="kmoderatorslist-jump fltrt">
				<?php $this->displayForumJump (); ?>
		</div>
		<?php if (!empty ( $this->modslist ) ) : ?>
		<div class="klist-moderators">
				<?php
				echo '' . JText::_('COM_KUNENA_GEN_MODERATORS') . ": ";
				$modlinks = array();
				foreach ( $this->modslist as $mod ) {
					$modlinks[] = CKunenaLink::GetProfileLink ( intval($mod->userid) );
				}
				echo implode(', ', $modlinks);
				?>
		</div>
		<?php endif; ?>
	</div>
</div>
<!-- F: List Actions Bottom -->