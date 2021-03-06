<?php
namespace Blog\Golb\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Marcel Wieser <typo3dev@marcel-wieser.de>
 *           Philipp Thiele <philipp.thiele@phth.de>
 *           Sascha Zander <sascha.zander@denkwerk.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Maps on table 'pages'
 *
 * @package Blog\Golb\Domain\Model
 */
class Page extends AbstractModel {

	/**
	 * Contains page abstract
	 *
	 * @var string $abstract
	 */
	protected $abstract;

	/**
	 * Contains URL alias
	 *
	 * @var string $alias
	 */
	protected $alias;

	/**
	 * Contains author email
	 *
	 * Use golb:author.email view helper to switch between this field and
	 * corresponding backend user based in plugin configuration
	 *
	 * @var string $authorEmail
	 */
	protected $authorEmail;

	/**
	 * Contains author image
	 *
	 * @lazy
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $authorImage;

	/**
	 * Contains author name
	 *
	 * Use golb:author.name view helper to switch between this field and
	 * corresponding backend user based in plugin configuration
	 *
	 * @var string $authorName
	 */
	protected $author;

	/**
	 * Contains selected backend layout
	 *
	 * @var string $backendLayout
	 */
	protected $backendLayout;

	/**
	 * Contains backend layout for sub level
	 *
	 * @var string $backendLayoutNextLevel
	 */
	protected $backendLayoutNextLevel;

	/**
	 * Tags the cached page belongs to
	 *
	 * @var string $cacheTags
	 */
	protected $cacheTags;

	/**
	 * Timestamp for cache timeout
	 *
	 * @var int $cacheTimeout
	 */
	protected $cacheTimeout;

	/**
	 * Contains relations to selected categories for this page
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Blog\Golb\Domain\Model\Category> $categories
	 */
	protected $categories;

	/**
	 * Contains page id to show content from instead of the current page content itself
	 *
	 * @var int $contentFromPid
	 */
	protected $contentFromPid;

	/**
	 * Create date timestamp
	 *
	 * @var int $crdate
	 */
	protected $crdate;

	/**
	 * Create user identifier
	 *
	 * @var int $cruserId
	 */
	protected $cruserId;

	/**
	 * Deleted flag
	 *
	 * @var bool $deleted
	 */
	protected $deleted;

	/**
	 * Meta description for this page
	 *
	 * @var string $description
	 */
	protected $description;

	/**
	 * Page type
	 *
	 * @var int $doktype
	 */
	protected $doktype;

	/**
	 * End time timestamp
	 *
	 * Maps on field "endtime"
	 *
	 * @var int $endTime
	 */
	protected $endtime;

	/**
	 * Flag to extend publish dates and access rights to subpages
	 *
	 * Maps on field "extendToSubpages"
	 *
	 * @var bool $extendToSubPages ;
	 */
	protected $extendToSubPages;

	/**
	 * Frontend user groups
	 *
	 * @var string $feGroup
	 */
	protected $feGroup;

	/**
	 * Hidden flag
	 *
	 * @var bool $hidden
	 */
	protected $hidden;

	/**
	 * Flag to hide page in navigation
	 *
	 * Maps on field "nav_hide"
	 *
	 * @var bool $hiddenInNavigation
	 */
	protected $navHide;

	/**
	 * Keywords for this page
	 *
	 * @var string $keywords
	 */
	protected $keywords;

	/**
	 * Last updated timestamp
	 *
	 * Maps on field "lastUpdated" (Note: CamelCase instead of underscores)
	 *
	 * @var int $lastUpdated
	 */
	protected $lastUpdated;

	/**
	 * Selected page layout
	 *
	 * @var int $layout
	 */
	protected $layout;

	/**
	 * Contains referenced media assets for this page
	 *
	 * @var string $media
	 */
	protected $media;

	/**
	 * Contains page identifier from mount point if document type is set to mount point
	 *
	 * @var int $mountPid
	 */
	protected $mountPid;

	/**
	 * Contains mount point overlay if needed
	 *
	 * @var int $mountPidOverlay
	 */
	protected $mountPidOl;

	/**
	 * Contains navigation title
	 *
	 * @var string $navigationTitle
	 */
	protected $navTitle;

	/**
	 * Timestamp how long the page is flagged as new
	 *
	 * Maps on field "newUntil" (Note: CamelCase instead of underscores)
	 *
	 * @var int $newUntil
	 */
	protected $newUntil;

	/**
	 * Flag indicates if the page should be cached
	 *
	 * @var bool $noCache
	 */
	protected $noCache;

	/**
	 * Flag to hide page from search results
	 *
	 * @var bool $noSearch
	 */
	protected $noSearch;

	/**
	 * Identifier of parent page
	 *
	 * @var int $pid
	 */
	protected $pid;

	/**
	 * Contains related pages
	 *
	 * @lazy
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Blog\Golb\Domain\Model\Page>
	 */
	protected $relatedPages;

	/**
	 * Shortcut target for document type shortcut depending on shortcut mode
	 *
	 * @var int $shortcut
	 */
	protected $shortcut;

	/**
	 * Shortcut mode if document type shortcut is selected
	 *
	 * @var int $shortcutMode
	 */
	protected $shortcutMode;

	/**
	 * Is site root flag
	 *
	 * @var bool $siteRoot
	 */
	protected $isSiteroot;

	/**
	 * Sorting field
	 *
	 * @var int $sorting
	 */
	protected $sorting;

	/**
	 * Start time timestamp
	 *
	 * @var int $startTime
	 */
	protected $starttime;

	/**
	 * List of subpages
	 *
	 * @lazy
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Blog\Golb\Domain\Model\Page>
	 */
	protected $subpages;

	/**
	 * Page subtitle
	 *
	 * @var string $subtitle
	 */
	protected $subtitle;

	/**
	 * Contains anchor link target for links to this page
	 *
	 * @var string $target
	 */
	protected $target;

	/**
	 * Contains timestamp
	 *
	 * @var int $tstamp
	 */
	protected $tstamp;

	/**
	 * Page title
	 *
	 * @var string $title
	 */
	protected $title;

	/**
	 * Unique identifier
	 *
	 * @var int $uid
	 */
	protected $uid;

	/**
	 * URL e.g. for document type external
	 *
	 * @var string $url
	 */
	protected $url;

	/**
	 * Selected URL scheme
	 *
	 * @var int $urlScheme
	 */
	protected $urlScheme;

	/**
	 * URL type
	 *
	 * @var int $urlType
	 */
	protected $urltype;

	/**
	 * Contains number of views
	 *
	 * @var int $viewCount
	 */
	protected $viewCount;

	/**
	 * List of content elements
	 *
	 * @lazy
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Blog\Golb\Domain\Model\ContentElement>
	 */
	protected $contentElements;

	/**
	 * The construtor
	 */
	public function __construct() {
		$this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->relatedPages = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->subpages = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->contentElements = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns author name
	 *
	 * @return string
	 */
	public function getAuthorName() {
		return $this->author;
	}

	/**
	 * Sets author name
	 *
	 * @param string $authorName
	 * @return void
	 */
	public function setAuthorName($authorName) {
		$this->author = $authorName;
	}

	/**
	 * Adds a category
	 *
	 * @param \Blog\Golb\Domain\Model\Category $category
	 * @return void
	 */
	public function addCategory(\Blog\Golb\Domain\Model\Category $category) {
		$this->categories->attach($category);
	}

	/**
	 * Removes a category
	 *
	 * @param \Blog\Golb\Domain\Model\Category $category
	 * @return void
	 */
	public function removeCategory(\Blog\Golb\Domain\Model\Category $category) {
		$this->categories->detach($category);
	}


	/**
	 * Returns create date timestamp
	 *
	 * @return int
	 */
	public function getCreationDate() {
		return $this->crdate;
	}

	/**
	 * Sets create date
	 *
	 * @param int $creationDate
	 * @return void
	 */
	public function setCreationDate($creationDate) {
		$this->crdate = $creationDate;
	}

	/**
	 * Returns create user identifier
	 *
	 * @return int
	 */
	public function getCreateUserId() {
		return $this->cruserId;
	}

	/**
	 * Sets create user identifier
	 *
	 * @param int $createUserId
	 * @return void
	 */
	public function setCreateUserId($createUserId) {
		$this->cruserId = $createUserId;
	}

	/**
	 * Returns deleted flag
	 *
	 * @return bool
	 */
	public function isDeleted() {
		return (bool)$this->deleted;
	}

	/**
	 * Returns document type
	 *
	 * @return int
	 */
	public function getDocumentType() {
		return $this->doktype;
	}

	/**
	 * Sets document type
	 *
	 * @param int $documentType
	 * @return void
	 */
	public function setDocumentType($documentType) {
		$this->doktype = $documentType;
	}

	/**
	 * Returns end time
	 *
	 * @return int
	 */
	public function getEndTime() {
		return $this->endtime;
	}

	/**
	 * Sets end time
	 *
	 * @param int $endTime
	 * @return void
	 */
	public function setEndTime($endTime) {
		$this->endtime = $endTime;
	}

	/**
	 * Returns true if page is hidden
	 *
	 * @return bool
	 */
	public function isHidden() {
		return $this->hidden;
	}

	/**
	 * Returns true if page should be hidden in navigation
	 *
	 * @return bool
	 */
	public function isHiddenInNavigation() {
		return (bool)$this->navHide;
	}

	/**
	 * Sets flag to hide page in navigation
	 *
	 * @param bool $hiddenInNavigation
	 * @return void
	 */
	public function setHiddenInNavigation($hiddenInNavigation) {
		$this->navHide = (bool)$hiddenInNavigation;
	}

	/**
	 * Returns overlay for mount point page identifier
	 *
	 * @return int
	 */
	public function getMountPidOverlay() {
		return $this->mountPidOl;
	}

	/**
	 * Sets page identifier for mount point overlay
	 *
	 * @param int $mountPidOverlay
	 * @return void
	 */
	public function setMountPidOverlay($mountPidOverlay) {
		$this->mountPidOl = $mountPidOverlay;
	}

	/**
	 * Returns navigation title
	 *
	 * Returns page title if navigation title is empty
	 *
	 * @return string
	 */
	public function getNavigationTitle() {
		return $this->navTitle;
	}

	/**
	 * Sets navigation title
	 *
	 * @param string $navigationTitle
	 * @return void
	 */
	public function setNavigationTitle($navigationTitle) {
		$this->navTitle = $navigationTitle;
	}

	/**
	 * Adds a related page
	 *
	 * @param \Blog\Golb\Domain\Model\Page $relatedPage
	 * @return void
	 */
	public function addRelatedPage(\Blog\Golb\Domain\Model\Page $relatedPage) {
		$this->relatedPages->attach($relatedPage);
	}

	/**
	 * Removes a related page
	 *
	 * @param \Blog\Golb\Domain\Model\Page $relatedPage
	 * @return void
	 */
	public function removeRelatedPage(\Blog\Golb\Domain\Model\Page $relatedPage) {
		$this->relatedPages->detach($relatedPage);
	}

	/**
	 * Returns true if page is the site root
	 *
	 * @return bool
	 */
	public function isSiteRoot() {
		return (bool)$this->isSiteroot;
	}

	/**
	 * Sets flag for site root
	 *
	 * @param mixed $siteRoot
	 * @return void
	 */
	public function setSiteRoot($siteRoot) {
		$this->isSiteroot = (bool)$siteRoot;
	}

	/**
	 * Returns start time timestamp for publishing
	 *
	 * @return int
	 */
	public function getStartTime() {
		return $this->starttime;
	}

	/**
	 * Sets timestamp for start time
	 *
	 * @param int $startTime
	 * @return void
	 */
	public function setStartTime($startTime) {
		$this->starttime = $startTime;
	}

	/**
	 * Adds a subpage
	 *
	 * @param \Blog\Golb\Domain\Model\Page $subpage
	 * @return void
	 */
	public function addSubpage(\Blog\Golb\Domain\Model\Page $subpage) {
		$this->subpages->attach($subpage);
	}

	/**
	 * Removes a subpage
	 *
	 * @param \Blog\Golb\Domain\Model\Page $subpage
	 * @return void
	 */
	public function removeSubpage(\Blog\Golb\Domain\Model\Page $subpage) {
		$this->subpages->detach($subpage);
	}

	/**
	 * Returns timestamp of last system update of the page
	 *
	 * @return int
	 */
	public function getModificationDate() {
		return $this->tstamp;
	}

	/**
	 * Sets timestamp of last system update
	 *
	 * @param int $timestamp
	 * @return void
	 */
	public function setModificationDate($timestamp) {
		$this->tstamp = $timestamp;
	}

	/**
	 * Returns URL type
	 *
	 * @return int
	 */
	public function getUrlType() {
		return $this->urltype;
	}

	/**
	 * Sets URL type
	 *
	 * @param int $urlType
	 * @return void
	 */
	public function setUrlType($urlType) {
		$this->urltype = $urlType;
	}

	/**
	 * Increases view count by given amount
	 *
	 * @param int $amount
	 * @return void
	 */
	public function increaseViewCount($amount = 1) {
		$this->viewCount = (int)$this->viewCount+$amount;
	}

	/**
	 * Adds a content element
	 *
	 * @param \Blog\Golb\Domain\Model\ContentElement $contentElement
	 * @return void
	 */
	public function addContentElement(\Blog\Golb\Domain\Model\ContentElement $contentElement) {
		$this->contentElements->attach($contentElement);
	}

	/**
	 * Removes a content element
	 *
	 * @param \Blog\Golb\Domain\Model\ContentElement $contentElement
	 * @return void
	 */
	public function removeContentElement(\Blog\Golb\Domain\Model\ContentElement $contentElement) {
		$this->contentElements->detach($contentElement);
	}

}