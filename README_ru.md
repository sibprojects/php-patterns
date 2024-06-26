# �������� ��������������

### Abstract Factory
����������� ������� (Abstract Factory) - ��� ������� ��������������, ������� ������������� ��������� ��� �������� �������� ��������������� ��� ��������������� �������� ��� �������� �� ���������� �������. �� ��������� ��������� �������, ������� ������������� ������������� ����������, �� �������� ���������� ���������� �� �������.

������� ���� ����������� ������� ������� � ���, ��� ��� ��������� � ���� ������� ������. �� ���� ��� ���������� ��������� ��� �������� ������, ������� � ���� ������� ������� ���������� �������. ����� �������, ����������� ������� ������������ �������� ��������, ��������� ���� � ������, ��� ������ ���������� �� �������.

�������� ���������� ����������� �������:

<ol>
  <li>����������� ������� (AbstractFactory): ���������� ��������� ��� �������� �������� ��������� ��������.</li>
  <li>���������� ������� (ConcreteFactory): ��������� ��������� ����������� ������� � ������� ���������� �������.</li>
  <li>����������� �������� (AbstractProduct): ���������� ��������� ��� ��������� ����� ���������, ����������� ��������.</li>
  <li>���������� �������� (ConcreteProduct): ��������� ��������� ����������� ���������.</li>
</ol>

���������� ����������� ������� ��������� ��������� ��������� ��������� ��������, ���������� �� �������������. ���������� ��� �������� � ������������ �������� � ������������, ��� ��������� ��� ���� ����������� �� ���������� ������� ���������, ������� ���������.

������������ ������������� ����������� �������:

<ol>
  <li>����������� ������������� ����������� ��������.</li>
  <li>��������� ���������� ��� �� ���������� ������� ���������.</li>
  <li>�������� ������ ��������� ���������, ��� ��� ���������� ��� ������� ������ �� ����������� ������� � �����������.</li>
  <li>��������� ����� ��������� ����� �������� ��������� � ������, �� ������� ������������ ���.</li>
</ol>

������, ������� ���������, ��� ����������� ������� ����� ����� ������� � ���������, �������� ���� �������� ��������� ����� �������� ��� �����������. �����, � ������ ���������� ������ ��������, ����������� ������ ��������� �� ��� ������������ �������, ��� ����� ���� ����������.


### Builder
������� Builder (���������) - ��� ����������� ������� ��������������, ������� ��������� ������� �������� �������� ������� �� ��� �������������. �� ��������� ��������� ������� ������� ��� �� �����, ����������� ������� ��������������� �� ��������� ������������� �������. �������� ���� �������� Builder ����������� � �������������� �������, ���������� ������� � �������� ��������, �� ��������� ������ �� ���������������.

����������:
������� Builder ������������, ����� ���������� ��������� ������� ������� � ���������� �������������� � �������. �� �������� �������, �����:

<ol>
  <li>������, ������� �� ������ �������, ����� ��������� ����������� ��� ������ � ���������� ��������������.</li>
  <li>������� �������� ������� ������ � ������ ���� �������������.</li>
  <li>������������� ������� ����� ����������, � �� ������ ������ ���������� ������ �������� ��������.</li>
</ol>

���������� �������� Builder:

<ol>
  <li>Builder (���������): ���������� ����� ��������� ��� �������� ��������� ������ �������� �������.</li>
  <li>ConcreteBuilder (���������� ���������): ��������� ��������� Builder ��� ��������������� � ������ ���������� ������ �������.</li>
  <li>Product (�������): ������������ ������� ������, ������� ������ ���� �������� � ������� �������� Builder.</li>
  <li>Director (��������): ��������� �������� ������� ������� ��������� ��� ���������� �������. ����� ��������� ������ ���������� ��������������� �������.</li>
</ol>

������ ������������� �������� Builder:

����������, ��� � ��� ���� ������������� ����, ������� ����� ����� ��������� ��������������, ����� ��� ���������� ������, ������� ��������, ��� ����� � �.�. ������ ��� �������� � ������ ������������������, � � ��� ���� ��������� ����� �����, ������� �� ����� ���������.

� ���� ������, ����� HouseBuilder ����� ������������ Builder, � ConcreteHouseBuilder - ConcreteBuilder. ��� ���������� ��������� ������������� ���� ����� �������������� ����� Director.

��� ������������� �������� Builder, �� ����� ����� ��������� ��������� ���� �����, �� ������� ������ �������������. ��� ��������� ��� ��������� ����� ���� ����� ��� ��������� ������������� ����, ����������� ������ ������������� � ���������������� �������.


### Factory method

������� ���������������� "��������� �����" (Factory Method) ��������� � ������ ��������� �������������� "�����������". �� ������������� ��������� ��� �������� ��������, �� ��������� ���������� ������, ����� ������ ��������������. ����� �������, ������ ������� ���������� �������� �������� ����������, � �� ��������� ������.

�������� ���� "���������� ������" ����������� � ���, ��� ������ ����������������� ������ ������������ ��� �������� ��������, ������������ �����-�������. ���� ����� ��������� � ���������� ��� ����������� ������ � ����������� ���������� �����������, ����� ��������� ��������� ���� ��������.

������������ �������� Factory Method:

<ol>
  <li>��������� �������� ���������� ��� �� ����������� �� ���������� ������� ���������, ��� ��� �� ��������� ������ � ������������ ������ ����� ��������� ��������.</li>
  <li>��������� ��������� ����� ��������, �� ����� ������������ ��� ������ � ��������.</li>
  <li>�������� ��������� �������� �������� � ���������� �� ��������������� ��������������� ��������.</li>
</ol>

### Prototype

������� Prototype (��������) ��������� � ������ ����������� ��������� �������������� � ������������ ��� �������� �������� ����� ������������ ������������� �������, ������ �������� ������ ������� � ����. ����� �������, �� ��������� ��������� ����� ��������, ������� ����������� ���� ��� �� �������������.

�������� ���� �������� Prototype ����������� � �������� ������������ �������� ������, ������� �������� ����� ������������. ��������� ����� �������� ������ �������������� ����� ������������, ����� ������� ���� ����������� ����� ��������.

���������� �������� Prototype ��������� ��������� ���������� ������� � ��������� � ������������ �������� �������� ����� ��������, ��� ��� ��������� � ������� �� ����������� ������� �� ������������.

������ ������������� �������� Prototype ����� ����, ����� � ��� ���� ������� ������, ������� ������� ����� �������� ��� �������������, � �� ����� ������� ����� �������� �������� � ������� ���������� ��� ���������� ������������� ���� ������.

### �������� (Singleton)

�������� - ��� ����������� ������, ������� ����������� ������������� ������ ������ ������� ������������� ������ � ����� ��������� �������� ������ � ����� ������� ������ ������ � ���������.

�������� ����� �� �� ������������ � ����������, ��� � ���������� ����������. ��� ������ ������������, �� �� �������� ����������� ������ ����.

�� �� ������ ������ ����� � ������������ �����, ��������� �� ��������, � ������ ���������. ��� ����� ��� �������� ����������� ������� �������� � ���. ��� �������� ���� ����� ����������� ��� ��������� ��������� ������.

### ������� Anti-corruption Layer

������� Anti-corruption Layer (���� �������������) ����������� � ���������� ������������ ����������� ��� �������� ����������� ������� �� ��������� ��� ���������������� ������� ������ ��� ��������� ��������.

����� ����� �������� ����������� � ���, ����� ������� ������������� ���� ����� �������� ��������� � ����������� ��������, ������� �������� ���������� ������ � ������� ����� ���������� ���������, ����������� ��� �����������. ����� ���� ������������� ��������� ���� ������� �� ��������� � ��������� ��������, ������������ �������� ��� ������, ������� �������� ������ � ���������� ����� �������.

���� ������ ��������� ����� ������� ���������� ������ � ����������� �� ������� ���������. �� ������ ��������� � �������� ���� ������� ����������, �� ���������� �������� ���������� ����� �������. ����� ����, ���� ������������� �������� ��������� � ���������� �������, ��� ��� ��������� �� ������� �������� ����� ������������ ������ ����� ����, ��� �������� � �������� �������.

### ������� Object Pool

Object pool ����� ����������� �������� ������������������; ��� �������� ���������� � ���������, ��� ��������� ������������� ���������� ������ ������, ������� �������� ���������� ������ ������, � ���������� ������������ ������������ ����������� ��������.

Object pools (����� ��������� ��� ���� ��������) ������������ ��� ���������� ������������ ��������. �������, ������� ������ � ���������� ����, ����� �������� �������� ����� ��������, ������ �������� � ���� ������, ������� ��� ��� ��������������. ������ ��� ����� ������������, �� ���� �� ����� ��������� ����� �������, ���� ��� ����. � �������� ������������, �� ����� ����� ��� �������������� �������, ������� ������������ ���������� ����������� ��������.

���������� ������� ��� �������� ������������ �������, ������� � ������ ������ �� ������������, � ����� ��������� ����, ����� �� ����� ���� ��������� ������������� ���������. ��� ���������� ���� ���� ����� Reusable Pool ���������� ��� �����-��������.
