const nodeIterator = document.createNodeIterator(
  document.getElementById('target'),
  NodeFilter.SHOW_TEXT,
  {
    acceptNode(node) {
      return !node.parentElement.classList.contains('alphabet');
    },
  }
);
while ((currentNode = nodeIterator.nextNode())) {
  const template = document.createElement('template');
  template.innerHTML = currentNode.nodeValue.replace(
    /(\w+)/g,
    '<span class="alphabet">$1</span>'
  );
  currentNode.parentElement.insertBefore(template.content, currentNode);
  currentNode.parentElement.removeChild(currentNode);
}
