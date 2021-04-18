<?php

namespace Lulububu\BaseExtension\Service;

use Bolt\Entity\Content;
use Bolt\Repository\ContentRepository;

/**
 * Class SettingsService
 *
 * @author Joshua Schumacher <joshua@lulububu.de>
 * @package Lulububu\BaseExtension\Service
 */
class SettingsService
{
    /**
     * @var ContentRepository $contentRepository
     */
    protected $contentRepository;

    /**
     * SettingsService constructor.
     *
     * @param ContentRepository $contentRepository
     */
    public function __construct(ContentRepository $contentRepository)
    {
        $this->contentRepository = $contentRepository;
    }

    /**
     * @return Content|null
     */
    public function getSettings(): ?Content
    {
        $settings = $this->contentRepository->findOneBy(['contentType' => 'settings']);

        if ($settings) {
            return $settings;
        }

        return null;
    }
}