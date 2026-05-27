document.addEventListener('DOMContentLoaded', () => {
  const tabList = document.querySelector('.oms-directions__tablist');
  const tabs = tabList.querySelectorAll('.oms-directions__tab');
  const panels = document.querySelectorAll('.oms-directions__panel');

  tabList.addEventListener('click', (e) => {
    const clickedTab = e.target.closest('.oms-directions__tab');
    if (!clickedTab) return;

    activateTab(clickedTab);
  });

  tabList.addEventListener('keydown', (e) => {
    let index = Array.from(tabs).indexOf(document.activeElement);
    if (index === -1) return;

    let nextIndex;

    switch (e.key) {
      case 'ArrowRight':
      case 'ArrowDown':
        nextIndex = (index + 1) % tabs.length;
        tabs[nextIndex].focus();
        e.preventDefault();
        break;
      case 'ArrowLeft':
      case 'ArrowUp':
        nextIndex = (index - 1 + tabs.length) % tabs.length;
        tabs[nextIndex].focus();
        e.preventDefault();
        break;
      case 'Home':
        tabs[0].focus();
        e.preventDefault();
        break;
      case 'End':
        tabs[tabs.length - 1].focus();
        e.preventDefault();
        break;
      case ' ':
      case 'Enter':
        activateTab(tabs[index]);
        e.preventDefault();
        break;
    }
  });

  function activateTab(targetTab) {
    tabs.forEach(tab => {
      const isActive = tab === targetTab;
      
      tab.setAttribute('aria-selected', isActive ? 'true' : 'false');
      tab.setAttribute('tabindex', isActive ? '0' : '-1');
      
      if (isActive) {
        tab.classList.add('oms-directions__tab--active');
      } else {
        tab.classList.remove('oms-directions__tab--active');
      }
    });

    const targetPanelId = targetTab.getAttribute('aria-controls');
    
    panels.forEach(panel => {
      if (panel.id === targetPanelId) {
        panel.removeAttribute('hidden');
      } else {
        panel.setAttribute('hidden', '');
      }
    });
  }
});