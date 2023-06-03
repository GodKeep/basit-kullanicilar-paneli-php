// Tab değiştirme işlemleri
const tabs = document.querySelectorAll('.tab-menu a');
const tabContents = document.querySelectorAll('.tab-content');

tabs.forEach(tab => {
  tab.addEventListener('click', (e) => {
    e.preventDefault();
    const target = tab.getAttribute('href').substring(1);
    tabContents.forEach(content => {
      content.style.display = 'none';
    });
    document.getElementById(target).style.display = 'block';

    tabs.forEach(tab => {
      tab.classList.remove('active');
    });
    tab.classList.add('active');
  });
});
