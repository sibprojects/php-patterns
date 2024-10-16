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

### ������� Adapter
������� � ��� ����������� ������ ��������������, ������� ��������� ������������� �������� ����������������� ���� � ������.

������� ��������� ��� ��������� ����� ����� ���������, ���������� ������ �� ������ ������� � ������, ������� ������� �������.

### ������� ���� (Bridge)
���� (Bridge) � ��� ����������� ������ ��������������, ������� ��������� ������-������ ��� ������� ����� �� ��������� ��������� ��������, ������� ����� ����� ����������� ���������� ���� �� �����.

���� �� ���� �������� (����������) ����� ��������� �� ������� ������ �������� (����������) � ������������ �� �������� ������. ��������� ��� ���������� ����� ��������� ������ ����������, �� ����� ����� �������������� � ������ ����������.

### ������� ����������� (Composite)
����������� (Composite) � ��� ����������� ������ ��������������, ������� ��������� ��������� ����������� ��������� �������� � �������� � ��� ��� ��, ��� � ��������� ��������.

����������� ��� ����� ���� ��������� ���� �����, ��������� � ����������� �������� ��������. ��� �������� � ������������ ������������ �� �������� � "������������" ����������� �� ������ ������.

### ������� Anti-corruption Layer

������� Anti-corruption Layer (���� �������������) ����������� � ���������� ������������ ����������� ��� �������� ����������� ������� �� ��������� ��� ���������������� ������� ������ ��� ��������� ��������.

����� ����� �������� ����������� � ���, ����� ������� ������������� ���� ����� �������� ��������� � ����������� ��������, ������� �������� ���������� ������ � ������� ����� ���������� ���������, ����������� ��� �����������. ����� ���� ������������� ��������� ���� ������� �� ��������� � ��������� ��������, ������������ �������� ��� ������, ������� �������� ������ � ���������� ����� �������.

���� ������ ��������� ����� ������� ���������� ������ � ����������� �� ������� ���������. �� ������ ��������� � �������� ���� ������� ����������, �� ���������� �������� ���������� ����� �������. ����� ����, ���� ������������� �������� ��������� � ���������� �������, ��� ��� ��������� �� ������� �������� ����� ������������ ������ ����� ����, ��� �������� � �������� �������.

### ������� Object Pool

Object pool ����� ����������� �������� ������������������; ��� �������� ���������� � ���������, ��� ��������� ������������� ���������� ������ ������, ������� �������� ���������� ������ ������, � ���������� ������������ ������������ ����������� ��������.

Object pools (����� ��������� ��� ���� ��������) ������������ ��� ���������� ������������ ��������. �������, ������� ������ � ���������� ����, ����� �������� �������� ����� ��������, ������ �������� � ���� ������, ������� ��� ��� ��������������. ������ ��� ����� ������������, �� ���� �� ����� ��������� ����� �������, ���� ��� ����. � �������� ������������, �� ����� ����� ��� �������������� �������, ������� ������������ ���������� ����������� ��������.

���������� ������� ��� �������� ������������ �������, ������� � ������ ������ �� ������������, � ����� ��������� ����, ����� �� ����� ���� ��������� ������������� ���������. ��� ���������� ���� ���� ����� Reusable Pool ���������� ��� �����-��������.

### ������� ������ (Unit of Work)

������ Unit of Work �������� ����� �� ����� ������� ��������� Object-Relational Mappers (ORM), � ������ Data Mappers � �����. ������� ������ (Unit of Work) � ��� ��������� (��� ��� ��� ������ � ������������), ������� ����������� �����, ���������� � ��������� ������� ������, ��������� ������� ������ ���� �������� � ��������� ������. � ����� ���������� Unit of Work, ���� �� ������������ ���������, �������� ������������ ������ ��������� ��� ���������� � ��������� ������, ����� �������� ����������� ��� ��������������� � ������� ���������� �������� � ����������� ����� ������ ��� ������� ������������� ������� � ���������� ����� ������.

���� Unit of Work ����������� � ���, ��� ����������� ���������� � ����� ������ ����������� (� �������� ��������) ������ �����, ����� ���������� ����� commit() Unit of Work, � �� ����� ��� �� ����� �������, ��������� �������, ��� ������������� � ������������� ����������� � ���� ������. ���� ������ ���������� �������� ����������� (batch update).

�������, ���������� � Unit of Work, ������ ����� ��������� ���������, ��������:
<ol>
  <li>����� (������������� INSERT-�������� �� ����� ��������� ����������)</li>
  <li>������ (SQL-������� �� ���������, ��� ��� ������ ��� ������� � �� ���������)</li>
  <li>���������� (UPDATE-�������)</li>
  <li>��������� (DELETE-�������)</li>
</ol>

���������� ��������� ��������� ��� ����������� ��������� � ����� ��������. ����� ������� ��������� ����������� � ��������� �������� � ������ ������, ���������� � ������ (��� ��� ������ ������������ ���������� �� � ����� ������).

����� ������� ������� ����������� � ������� ������������ ����������, ������� ����������� ���������, ����� ��� ����� ��������� ����� ���������� � ��������, ��� ��� �������� ��� ������ ���� �������. ���� ����� ���������� ������ ����������� �� ���� ������ � �����������������, ������� � ����������� ����� ������� �������, ��� ����������, ������� ������������ �������� diff � ����� �������� �������� ������, �� �� ����� �������� ������ ������� ����: �������� ����� �� �������� �� �������� diff ���� �� ����.

����� ����, ������������ Unit of Work �� ��������� ���� ������ ������ ������� ������� ����������, ������� ��������� ��� ���������� ���������, ���� ��������� ����������� �� ��������� ��� ���������� ������� � ������. � PHP ���������� ��� ����� ������ ��������� ���� ��������, � ��������� ����� ��������� Unit of Work ����� ����� � ��������� ��������.

### ������� �������� (Pipeline Pattern) � Laravel

������� "��������" (Pipeline Pattern) � ��� ������������� ������, ������� ������������ ��� ���������������� ��������� ������, ����� ��������� ����� ������ ���������� � �������� ������� ������ ��� ��������� ������. �������� ���� ����������� � ��������� �������� �������� �� ��������� ������ (�����), ��� ������ ��� ������������ ������ � �������� �� ������ �� �������.
��� ��� ��������:
<ol>
  <li>������� ������ ��������� �� ������ ������ ���������.</li>
  <li>������ ������ ������������ ������, �������� �����-�� ������������������ ������, � �������� ��������� �� ��������� ������.</li>
  <li>��������� ������ ���������� �������� ���������.</li>
</ol>

���� ������� ���� ����� ����������� � ��������, ��� ���������� ��������������� ��������� ��������� ����������� �������� ��� �������� ��� �������. ������� �������� ��������� ������ � �������� ETL (Extract, Transform, Load), �������������� �����������, ������������, � ����� ���-�������� (��������, ������ ���� ����� ��������� �������� ������������, �����������, ���� � �.�.).

�������� ������������:
<ol>
  <li>�����������: ������ ������ ������������ ������ ����������, ��� �������� ��������� ��� ��������� ��������� ������.</li>
  <li>��������� ������������: ��������� ������ ������ � ��� ��������� ���������, �� ����� ����������� �� �����������.</li>
  <li>����������������: �������� ����� �����������������, �������� ������ ������ �� ������ ����� ��� �������.</li>
</ol>

������ �������������:

����������� ��������� ������ � ���-����������, ��� ������� �������� ����� ��������� �����:
<ol>
  <li>�������������� ������������.</li>
  <li>����������� �������.</li>
  <li>��������� ������.</li>
  <li>�������� ������-������.</li>
  <li>������������ ������.</li>
</ol>

����� �������, ������ ���� ��������� ���� ������, ��������������� ����������� ������ � ��������� �� ������.

���� ������� ����� ������ ��� ��������� ��������� ������, ��������, � �������� �������� ��� ���������, ��� ������ �������� ��������� ������ ���������� � �������������� ����� ���, ��� ���� ������������������� ��� ������������.
