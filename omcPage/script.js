document.addEventListener('DOMContentLoaded', () => {
  const tabList = document.querySelector('.oms-directions__tablist');
  const tabs = tabList.querySelectorAll('.oms-directions__tab');
  const panels = document.querySelectorAll('.oms-directions__panel');

  tabList.addEventListener('click', (e) => {
    const clickedTab = e.target.closest('.oms-directions__tab');
    if (!clickedTab) return;

    activateTab(clickedTab);
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