'use strict';

var Shuffle = window.shuffle;

var Scorecards = function (element) {
  this.element = element;

  // Log out events.
  this.addShuffleEventListeners();

  this.shuffle = new Shuffle(element, {
    itemSelector: '.grid__brick',
    sizer: element.querySelector('.my-sizer-element'),
  });

  this._activeFilters = [];

  this.addFilterButtons();
  this.addSorting();
  this.addSearchFilter();

  this.mode = 'exclusive';
};

Scorecards.prototype.toArray = function (arrayLike) {
  return Array.prototype.slice.call(arrayLike);
};

Scorecards.prototype.toggleMode = function () {
  if (this.mode === 'additive') {
    this.mode = 'exclusive';
  } else {
    this.mode = 'additive';
  }
};

/**
 * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
 * for them like you normally would (with jQuery for example). The extra event
 * data is in the `detail` property.
 */
 Scorecards.prototype.addShuffleEventListeners = function () {
  var handler = function (event) {
    console.log('type: %s', event.type, 'detail:', event.detail);
  };

  this.element.addEventListener(Shuffle.EventType.LAYOUT, handler, false);
  this.element.addEventListener(Shuffle.EventType.REMOVED, handler, false);
};

Scorecards.prototype.addFilterButtons = function () {
  var options = document.querySelector('.filter-options');

  if (!options) {
    return;
  }

  var filterButtons = this.toArray(
    options.children
    );

  filterButtons.forEach(function (button) {
    button.addEventListener('click', this._handleFilterClick.bind(this), false);
  }, this);
};

Scorecards.prototype._handleFilterClick = function (evt) {
  var btn = evt.currentTarget;
  var isActive = btn.classList.contains('active');
  var btnGroup = btn.getAttribute('data-group');

  // You don't need _both_ of these modes. This is only for the Scorecards.

  // For this custom 'additive' mode in the Scorecards, clicking on filter buttons
  // doesn't remove any other filters.
  if (this.mode === 'additive') {
    // If this button is already active, remove it from the list of filters.
    if (isActive) {
      this._activeFilters.splice(this._activeFilters.indexOf(btnGroup));
    } else {
      this._activeFilters.push(btnGroup);
    }

    btn.classList.toggle('active');

    // Filter elements
    this.shuffle.filter(this._activeFilters);

  // 'exclusive' mode lets only one filter button be active at a time.
} else {
  this._removeActiveClassFromChildren(btn.parentNode);

  var filterGroup;
  if (isActive) {
    btn.classList.remove('active');
    filterGroup = Shuffle.ALL_ITEMS;
  } else {
    btn.classList.add('active');
    filterGroup = btnGroup;
  }

  this.shuffle.filter(filterGroup);
}
};

Scorecards.prototype._removeActiveClassFromChildren = function (parent) {
  var children = parent.children;
  for (var i = children.length - 1; i >= 0; i--) {
    children[i].classList.remove('active');
  }
};

Scorecards.prototype.addSorting = function () {
  var menu = document.querySelector('.sort-options');

  if (!menu) {
    return;
  }

  menu.addEventListener('change', this._handleSortChange.bind(this));
};

Scorecards.prototype._handleSortChange = function (evt) {
  var value = evt.target.value;
  var options = {};

  function sortByDate(element) {
    return element.getAttribute('data-created');
  }

  function sortByTitle(element) {
    return element.getAttribute('data-title').toLowerCase();
  }

  if (value === 'date-created') {
    options = {
      reverse: true,
      by: sortByDate,
    };
  } else if (value === 'title') {
    options = {
      by: sortByTitle,
    };
  }

  this.shuffle.sort(options);
};

// Advanced filtering
Scorecards.prototype.addSearchFilter = function () {
  var searchInput = document.querySelector('.js-shuffle-search');

  if (!searchInput) {
    return;
  }

  searchInput.addEventListener('keyup', this._handleSearchKeyup.bind(this));
};

/**
 * Filter the shuffle instance by items with a title that matches the search input.
 * @param {Event} evt Event object.
 */
 Scorecards.prototype._handleSearchKeyup = function (evt) {
  var searchText = evt.target.value.toLowerCase();

  this.shuffle.filter(function (element, shuffle) {

    // If there is a current filter applied, ignore elements that don't match it.
    if (shuffle.group !== Shuffle.ALL_ITEMS) {
      // Get the item's groups.
      var groups = JSON.parse(element.getAttribute('data-groups'));
      var isElementInCurrentGroup = groups.indexOf(shuffle.group) !== -1;

      // Only search elements in the current group
      if (!isElementInCurrentGroup) {
        return false;
      }
    }

    var titleElement = element.querySelector('.picture-item__title');
    var titleText = titleElement.textContent.toLowerCase().trim();

    return titleText.indexOf(searchText) !== -1;
  });
};

document.addEventListener('DOMContentLoaded', function () {
  window.Scorecards = new Scorecards(document.getElementById('grid'));
});