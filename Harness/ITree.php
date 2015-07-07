<?php
namespace CoffeeStudio\Harness;
/**
 * Tree interface
 * 
 * All structural objects (such as Section, ProductCategory and similar) must implement
 * this interface to work with admin system
 */
interface ITree extends IAdminView {
    /**
     * @return string Just structure tree node name
     */
    public function getPath();

    /**
     * @return string Full path consisting of all ancestors and self node names separated by '/'
     */
    public function getFullPath();

    /**
     * @return string Get title or other human-readable string representation of the section
     */
//   public function getTitle(); // <- inherited from IAdminView

    /**
     * Check if parent existant
     *
     * @return bool
     */
    public function hasParent();

    /**
     * Check if children are present
     *
     * @return bool
     */
    public function hasChildren();

    /**
     * Get child nodes
     *
     * @return Model
     */
    public function getChildren();

    /**
     * Get parent node
     *
     * @return Model
     */
    public function getParent();
}
