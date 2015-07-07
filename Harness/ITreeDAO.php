<?php
namespace CoffeeStudio\Harness;
/**
 * Tree interface
 * 
 * All structural objects (such as Section, ProductCategory and similar) must implement
 * this interface to work with admin system
 */
interface ITreeDAO extends IAdminViewDAO {
    /**
     * Get section tree node by path
     *
     * @param string|array $path
     * @return Model
     */
    public function getByPath($path);

    /**
     * Get top level node set
     *
     * @return Model
     */
    public function getTopLevel();
}
